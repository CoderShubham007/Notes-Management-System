$(document).ready(function() {

    $('#signup').click(function(e) {
        e.preventDefault();
        if ($('#signup-name').val() == "" || $('#signup-email').val() == "" || $('#signup-password').val() == "" || $('#signup-confirm-password').val() == "") {
            alert('All Fields are Required');
        } else {
            if ($('#signup-password').val() != $('#signup-confirm-password').val()) {
                alert('Password and Confirm Password should be same');
            } else {
                let name = $('#signup-name').val();
                let email = $('#signup-email').val();
                let password = $('#signup-password').val();
                $.ajax({
                    url: "./_signup.php",
                    type: "POST", 
                    data: {user_name: name, user_email: email, user_password: password},
                    success: function(data) {
                        if (data == 1) {
                            alert("Account created successfully!");
                            window.location.href = "/Notes/login.php";
                        } else if (data == 0) {
                            alert("Email already exists");
                        } else {
                            alert("Some Error Occured. Please try again later!");
                        }
                    }
                });
            }
        }
    });
});