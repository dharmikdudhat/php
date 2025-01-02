<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- <script
        src="https://example.com/fontawesome/v6.6.0/js/all.js"
        data-auto-replace-svg="nest"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
    </script>

</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Registration Form</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <button type="button" id="registration" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#registerModal">Sign Up</button>
                    </div>
                    <div class="navbar-nav">
                        <button type="button" id="login" class="btn btn-light">Sign In</button>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div class="container mt-5">
        <h2 class="text-center">User Data</h2>
        <table class="table table-bordered table-striped mt-3" id="table_id">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Salary</th>
                    <th>Image</th>
                    <th>Update/Delete</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>

    <!-- <div class="text-center">
        <button type="button" class="btn btn-secondary btn-md" data-bs-toggle="modal" data-bs-target="#myModal">Update
            or
            Delete
        </button>
    </div> -->

    <!-- <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Update or Delete User</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Modal -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">Register</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Registration Form -->
                    <form action="http://localhost/task1/includes/formhandler.inc.php" method="POST" id="registrationform"
                        name="registrationform" autocomplete="off" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="firstname" class="form-label">First Name <span>(Required, write at least 2
                                    characters)</span></label>
                            <input type="text" class="form-control" id="firstname" name="firstname" required>
                        </div>
                        <div class="mb-3">
                            <label for="lastname" class="form-label">Last Name <span>(Required, write at least 2
                                    characters)</span></label>
                            <input type="text" class="form-control" id="lastname" name="lastname" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email <span>(Required, please enter a valid
                                    email)</span></label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="salary" class="form-label">Salary <span>(Required, please enter a valid
                                    number)</span></label>
                            <input type="number" class="form-control" id="salary" name="salary" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password <span>(Required, please enter a unique
                                    password)</span></label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="mb-3">
                            <label for="cpassword" class="form-label">Confirm Password <span>(Required, please repeat
                                    the same password)</span></label>
                            <input type="password" class="form-control" id="cpassword" name="cpassword" required>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image <span>(Required, please upload your image (Max
                                    size allowed is 1 MB))</span></label>
                            <input type="file" class="form-control" id="image" name="image" accept=".jpg, .png" required>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- update modal;-->
    <!-- Modal HTML for Update Form -->
    <div class="modal fade" id="updateUserModal" tabindex="-1" aria-labelledby="updateUserModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateUserModalLabel">Update User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" enctype="multipart/form-data" action="updateuser.php" id="updateUserForm">
                        <input type="hidden" name="id" id="userId" value="">

                        <div class="mb-3">
                            <label for="firstname" class="form-label">First Name:</label>
                            <input type="text" class="form-control" id="firstname1" name="firstname1" required>
                        </div>

                        <div class="mb-3">
                            <label for="lastname" class="form-label">Last Name:</label>
                            <input type="text" class="form-control" id="lastname1" name="lastname1" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email1" name="email1" required>
                        </div>

                        <div class="mb-3">
                            <label for="salary" class="form-label">Salary:</label>
                            <input type="text" class="form-control" id="salary1" name="salary1" required>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Image:</label>
                            <input type="file" class="form-control" id="image1" accept=".jpg, .png" name="image1">
                            <div id="currentImage"></div>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="http://localhost/task1/includes/js/validate.js"></script>

    <!-- <script>
        $(document).ready(function () {
            $('body').find("#table_id").DataTable({
                order: [[3, 'desc']]
            });
        });
    </script> -->

    <script>
        $(document).ready(function() {

            $('#registrationform').submit(function(event) {
                event.preventDefault(); // Prevent the default form submission

                $('#responseMessage').empty(); // Clear previous messages

                var formData = new FormData(this); // Create a FormData object from the form

                $.ajax({
                    type: 'POST',
                    url: 'http://localhost/task1/includes/formhandler.inc.php', // PHP script to handle registration
                    data: formData, // Send form data including files
                    processData: false, // Prevent jQuery from processing the data
                    contentType: false, // Prevent jQuery from overriding the content type
                    dataType: 'json', // Expect JSON response from the server
                    success: function(response) {
                        console.log(response); // Log the entire response for debugging

                        if (response.success) {
                            // Show success message
                            $('body').load("http://localhost/task1/includes/userstable.php", function(responseText, statusTxt, xhr) {
                                if (statusTxt == 'success') {
                                    toastr.success("loaded successfully");
                                } else {
                                    toastr.error("not able to load");
                                }
                            });
                        } else {
                            // Show error message
                            $('#responseMessage').html('<div class="alert alert-danger">' + response.message + '</div>');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX error:", error); // Log AJAX errors
                        console.error(xhr.responseText); // Log the server response for debugging
                        $('#responseMessage').html('<div class="alert alert-danger">An error occurred. Please try again later.</div>');
                    }
                });
            });

            $('#table_id').DataTable({
                "processing": true, // Show processing indicator
                "serverSide": true, // Enable server-side processing
                "ajax": {
                    "url": "http://localhost/task1/includes/fetch_users.php", // Ensure this is the correct path
                    "type": "GET", // Ensure the request type is correct
                    "data": function(d) {
                        d.searchTerm = d.search.value;
                    }
                },
                "paging": true,
                "pagelength": 10,
                "lengthMenu": [5, 10, 15, 20, 25],
                "order": [
                    [0, "desc"]
                ],
                "columns": [{
                        "data": "ID"
                    },
                    {
                        "data": "FIRST_NAME"
                    },
                    {
                        "data": "LAST_NAME"
                    },
                    {
                        "data": "EMAIL"
                    },
                    {
                        "data": "SALARY"
                    },
                    {
                        "data": "IMAGE",
                        "render": function(data) {
                            return `<img src='http://localhost/task1/includes/img/${data}' alt='User Image' width='100' height='100'/>`;
                        }
                    },
                    {
                        "data": null, // This will hold our buttons
                        "render": function(data, type, row) {
                            return `
                                <button class="btn btn-warning btn-sm edit-btn" data-id="${row.ID}"><i class="fa fa-pencil-square" aria-hidden="true"></i></button>
                                <button class="btn btn-danger btn-sm delete-btn" data-id="${row.ID}"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                `;
                        }
                    }
                ]
            });
        });

        $(document).on('click', '.delete-btn', function() {
            var table = $('#table_id').DataTable();
            var currentPage = table.page();
            var userId = $(this).data('id');
            

            swal.fire({
                title: 'Are you sure you wanna delete this record?',
                text: 'You will not be able to revert this.',
                icon: 'warning',
                showCancleButton: true,
                confirmButtonColor: '#3085d6',
                cancleButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: 'http://localhost/task1/includes/userdelete.php',
                        type: 'POST',
                        data: {
                            id: userId
                        },
                        dataType: 'json',
                        success: function(response) {
                            if (response.success) {
                                table.ajax.reload(function(){
                                    table.page(currentPage).draw(false);
                                }, false);

                                swal.fire(
                                    'Deleted!',
                                    'Your record has been deleted.',
                                    'success'
                                );
                            } else {
                                swal.fire(
                                    'Error',
                                    'Something went wrong.',
                                    response.message
                                )
                            };
                        },
                        error: function() {
                            swal.fire(
                                'Error!',
                            );
                        }
                    })
                }
            })
        })

        $('#updateUserForm').on('submit', function(e) {
            e.preventDefault();
            var userId = $('#userId').val(); // Correctly retrieve the ID value

            var formData = new FormData(this); // Get all form data
            formData.append('id', userId); // Append the ID if needed

            $.ajax({
                url: 'http://localhost/task1/includes/updateuser.php',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    $('#updateUserModal').modal('hide');
                    $('#table_id').DataTable().ajax.reload(); // Reload the DataTable to show updated data
                    swal.fire(response);
                },
                error: function() {
                    swal.fire('Failed to update user.');
                }
            });
        });


        // Handle click event on the Edit button
        $(document).on('click', '.edit-btn', function() {
            var userId = $(this).data('id');

            // Use AJAX to get the user details by ID
            $.ajax({
                url: 'http://localhost/task1/includes/get_user.php', // Create a new PHP script to fetch user details
                type: 'GET',
                data: {
                    id: userId
                },
                dataType: 'json',
                success: function(data) {
                    // Populate the form fields with the retrieved data
                    $('#userId').val(data.ID);
                    $('#firstname1').val(data.FIRST_NAME);
                    $('#lastname1').val(data.LAST_NAME);
                    $('#email1').val(data.EMAIL);
                    $('#salary1').val(data.SALARY);

                    // Handle the image display
                    if (data.IMAGE) {
                        $('#currentImage').html(
                            `<p>Current Image: <strong>${data.IMAGE}</strong></p>
                     <img src="img/${data.IMAGE}" alt="User Image" style="width: 100px;">`
                        );
                    } else {
                        $('#currentImage').html('');
                    }

                    // Show the modal
                    $('#updateUserModal').modal('show');
                },
                error: function() {
                    swal.fire('Failed to fetch user details.');
                }
            });
        });



        $('#login').click(function() {
            $.ajax({
                url: 'http://localhost/task1/includes/login.php',
                type: 'GET',
                success: function(data) {
                    $('body').html(data);
                    toastr.success("Login page loaded successfully");
                },
                error: function() {
                    toastr.error('Failed to load the login page');
                }
            });
        });
    </script>

</body>

</html>