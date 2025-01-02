<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        toastr.options = {
            "closeButton": true,  // Show close button
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,  // Show progress bar
            "positionClass": "toast-top-right",  // Position of the toast
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",  // Animation duration for showing
            "hideDuration": "1000", // Animation duration for hiding
            "timeOut": "5000",      // Time before auto-close (0 for sticky)
            "extendedTimeOut": "1000", // Time for delay on hover
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn", // Animation for showing
            "hideMethod": "fadeOut"  // Animation for hiding
        };
    </script>

    <script type="text/javascript">
        // Display the session message using JavaScript
        window.onload = function () {
            <?php if (isset($_SESSION['message'])): ?>
                alert("<?php echo $_SESSION['message']; ?>");
                <?php unset($_SESSION['message']); // Clear the message after displaying ?>
            <?php endif; ?>
        };
    </script>
</head>

<body>
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['firstname']) . " " . htmlspecialchars($_SESSION['lastname']); ?>
    </h2>
    <button type="button" id="logout" name="logout">
        <!-- <a href="logout.php"> -->
        Log Out</a>
    </button>
    <div id="responseMessage"></div>
</body>

<script>
    $(document).ready(function () {
        $('#logout').click(function (event) {
            event.preventDefault(); // Prevent the default form submission

            $('#responseMessage').empty(); // Clear previous messages

            $.ajax({
                type: 'POST',
                url: 'http://localhost/task1/includes/logout.php', // PHP script to handle login
                // data: $(this).serialize(), // Serialize form data
                dataType: 'json', // Expect JSON response from the server
                success: function (response) {
                    console.log(response);
                    console.log("Logout Response: ", response); // Log the entire response for debugging

                    if (response.success) {
                        // Show success message
                        $('body').load("http://localhost/task1/includes/login.php", function (responseText, statusTxt, xhr) {
                            if (statusTxt == 'success') {
                                toastr.success("logout successfully");
                            } else {
                                toastr.error("not able to logout");
                            }
                        })

                        // Redirect to dashboard after a short delay
                        // setTimeout(function () {
                        //     console.log("Redirecting to dashboard...");
                        //     window.location.href = 'dashboard.php'; // Redirect to dashboard
                        // }, 1000); // Delay of 1 second
                    } else {
                        // Show error message
                        $('#responseMessage').html('<div class="alert alert-danger">' + response.message + '</div>');
                        console.log(xhr.responseText);
                    }
                },
                error: function (xhr, status, error) {
                    console.error("AJAX error:", error); // Log AJAX errors
                    console.error(xhr.responseText); // Log the server response for debugging
                    $('#responseMessage').html('<div class="alert alert-danger">An error occurred. Please try again later.</div>');
                }
            });
        });
    });
</script>

</html>