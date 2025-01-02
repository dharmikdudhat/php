<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
  <div id="myModal" class="modal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Update or Delete User</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Enter ID of the user : <input type="text" id="userIdInput" class="form-control"></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="deleteButton">Delete</button>
          <button type="button" class="btn btn-primary" id="updateButton">Update</button>
        </div>
      </div>
    </div>
  </div>

  <script>

    document.getElementById('updateButton').addEventListener('click', function () {
      const userId = document.getElementById('userIdInput').value;

      if (userId) {
        window.location.href = 'updateuser.inc.php?id=' + userId;
      } else {
        alert("enter user id");
      }
    })

    document.getElementById('deleteButton').addEventListener('click', function () {
      const userId = document.getElementById('userIdInput').value;

      if (userId) {
        window.location.href = 'userdelete.php?id=' + userId;
      } else {
        "enter user id";
      }
    })
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</body>

</html>