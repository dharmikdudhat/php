$(document).ready(function(){
    $("#registrationform").validate({
        rules: {
            firstname: {
                required: true,
                minlength: 2
            },
            lastname: {
                required: true,
                minlength: 2
            },
            email: {
                required: true,
                email: true
            },
            salary: {
                required: true,
                number: true,
                minlength: 4
            },
            password: {
                required: true,
                minlength: 8
            },
            cpassword: {
                required: true,
                equalTo: "#password"
            }
        },
        messages: {
            firstname: {
                required: "Please enter your first name",
                minlength: "Enter first name of atleast two characters"
            },
            lastname: {
                required: "Please enter your last name",
                minlength: "Enter last name of atleast two characters"
            },
            email: {
                required: "Please enter your email",
                email: "Please enter a valid email"
            },
            salary: {
                required: "Please enter your salary",
                number: "Please enter a valid salary",
                minlength: "Enter salary of atleast four characters"
            },
            password: {
                required: "Please enter your password",
                minlength: "Enter password of atleast eight characters"
            },
            cpassword: {
                required: "Please enter your confirm password",
                equalTo: "Your password does not match to confirm password"
            }
        }
    })
})