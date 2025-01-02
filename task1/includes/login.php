<!-- </?php

//session_start();
//$firstname_error = isset($_SESSION['firstname_error']) ? $_SESSION['firstname_error'] : '';
//$lastname_error = isset($_SESSION['lastname_error']) ? $_SESSION['lastname_error'] : '';
//email_error = isset($_SESSION['email_error']) ? $_SESSION['email_error'] : '';
//$salary_error = isset($_SESSION['salary_error']) ? $_SESSION['salary_error'] : '';
//session_unset();
// -->
<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script type="text/javascript">
        // Display the session message using JavaScript
        window.onload = function () {
            <?php if (isset($_SESSION['message'])): ?>
                alert("<?php echo $_SESSION['message']; ?>");
                <?php unset($_SESSION['message']); // Clear the message after displaying ?>
            <?php endif; ?>
        };
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
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

</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Sign In Form</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <button type="button" id="usertable">User's Table</button>
                    </div>
                    <div class="navbar-nav">
                        <button type="button" id="registration">Sign Up</button>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Sign In</h3>
                    </div>
                    <div class="card-body">
                        <!-- Login  Form -->
                        <form action="authentication.inc.php" method="POST" id="loginform" name="loginform"
                            autocomplete="off" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email <span>(Required, please enter
                                        valid)</span></label>
                                <input type="email" class="form-control" id="email" name="email">

                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password <span>(Required, please enter
                                        password)</span></label>
                                <input type="password" class="form-control" id="password" name="password">

                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Sign In</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#loginform').submit(function (event) {
                event.preventDefault(); // Prevent the default form submission

                $('#responseMessage').empty(); // Clear previous messages

                $.ajax({
                    type: 'POST',
                    url: 'http://localhost/task1/includes/authentication.inc.php', // PHP script to handle login
                    data: $(this).serialize(), // Serialize form data
                    dataType: 'json', // Expect JSON response from the server
                    success: function (response) {
                        console.log(response); // Log the entire response for debugging

                        if (response.success) {
                            // Show success message
                            $('body').load("http://localhost/task1/includes/dashboard.php", function (responseText, statusTxt, xhr) {
                                if (statusTxt == 'success') {
                                    toastr.success("loaded successfully");
                                } else {
                                    toastr.error("not able to load");
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
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error("AJAX error:", error); // Log AJAX errors
                        console.error(xhr.responseText); // Log the server response for debugging
                        $('#responseMessage').html('<div class="alert alert-danger">An error occurred. Please try again later.</div>');
                    }
                });
            });


            // $(document).ready(function () {
            $('#usertable').click(function () {
                $.ajax({
                    url: 'http://localhost/task1/includes/userstable.php',
                    type: 'GET',
                    success: function (data) {
                        $('body').html(data); // Load the userstable content into the #content div
                        toastr.success('User table loaded successfully');
                    },
                    error: function (xhr, status, error) {
                        toastr.error('Failed to load the user table page');
                        console.log("Error details: ", status, error); // Log error details
                        console.log("XHR response: ", xhr.responseText); // Log server response for further inspection
                    }
                });
            });

            $('#registration').click(function () {
                $.ajax({
                    url: 'http://localhost/task1/',
                    type: 'GET',
                    success: function (data) {
                        $('body').html(data); // Load the index content into the #content div
                        toastr.success('Index page loaded successfully');
                    },
                    error: function (xhr, status, error) {
                        toastr.error('Failed to load the index page');
                        console.log("Error details: ", status, error); // Log error details
                        console.log("XHR response: ", xhr.responseText); // Log server response for further inspection
                    }
                });
            });
        });



    </script>


    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script> -->
    <!-- <script src="includes/js/validate.js"></script> -->

</body>


</html>