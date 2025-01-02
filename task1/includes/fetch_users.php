<?php // fetch_users.php
require_once "dbh.inc.php";
header('Content-Type: application/json');

// Get search and pagination data from DataTables
$draw = isset($_GET['draw']) ? intval($_GET['draw']) : 0;
$start = isset($_GET['start']) ? intval($_GET['start']) : 0;
$length = isset($_GET['length']) ? intval($_GET['length']) : 10;
$searchValue = isset($_GET['search']['value']) ? $_GET['search']['value'] : '';

// Column ordering
$columnIndex = isset($_GET['order'][0]['column']) ? intval($_GET['order'][0]['column']) : 0;
$columnName = isset($_GET['columns'][$columnIndex]['data']) ? $_GET['columns'][$columnIndex]['data'] : 'ID';
$columnSortOrder = isset($_GET['order'][0]['dir']) ? $_GET['order'][0]['dir'] : 'desc';

try {
    // Count total records without filtering
    $queryTotal = "SELECT COUNT(*) as total FROM user_2";
    $stmtTotal = $pdo->prepare($queryTotal);
    $stmtTotal->execute();
    $totalRecords = $stmtTotal->fetch(PDO::FETCH_ASSOC)['total'];

    // Count total records with filtering
    $queryFiltered = "SELECT COUNT(*) as totalFiltered FROM user_2 WHERE 1 ";
    if (!empty($searchValue)) {
        $queryFiltered .= "AND (FIRST_NAME LIKE :searchValue OR LAST_NAME LIKE :searchValue OR EMAIL LIKE :searchValue) ";
    }
    $stmtFiltered = $pdo->prepare($queryFiltered);
    if (!empty($searchValue)) {
        $searchValueWildcard = '%' . $searchValue . '%';
        $stmtFiltered->bindParam(':searchValue', $searchValueWildcard, PDO::PARAM_STR);
    }
    $stmtFiltered->execute();
    $totalFiltered = $stmtFiltered->fetch(PDO::FETCH_ASSOC)['totalFiltered'];

    // Prepare the main query to get data for the current page
    $query = "SELECT ID, FIRST_NAME, LAST_NAME, EMAIL, SALARY, IMAGE FROM user_2 WHERE 1 ";
    if (!empty($searchValue)) {
        $query .= "AND (FIRST_NAME LIKE :searchValue OR LAST_NAME LIKE :searchValue OR EMAIL LIKE :searchValue) ";
    }
    $query .= "ORDER BY $columnName $columnSortOrder LIMIT :start, :length";

    // Prepare the statement for data fetching
    $stmt = $pdo->prepare($query);
    if (!empty($searchValue)) {
        $stmt->bindParam(':searchValue', $searchValueWildcard, PDO::PARAM_STR);
    }
    $stmt->bindParam(':start', $start, PDO::PARAM_INT);
    $stmt->bindParam(':length', $length, PDO::PARAM_INT);

    // Execute the query
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Return the data in the format expected by DataTables
    echo json_encode([
        "draw" => $draw,
        "recordsTotal" => $totalRecords,
        "recordsFiltered" => $totalFiltered, // Correct total filtered records
        "data" => $users
    ]);
} catch (PDOException $e) {
    // Handle errors
    echo json_encode([
        "error" => $e->getMessage(),
        "draw" => $draw,
        "recordsTotal" => 0,
        "recordsFiltered" => 0,
        "data" => []
    ]);
}
