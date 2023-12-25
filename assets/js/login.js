$(document).ready(function() {
    $('#login').click(function(e) {
        e.preventDefault();
        if ($('#login-password').val() == "" || $('#login-email').val() == "") {
            alert('All Fields are Required');
        } else {
            let email = $('#login-email').val();
            let password = $('#login-password').val();
            $.ajax({
                url: "./_login.php",
                type: "POST", 
                data: {user_email: email, user_password: password},
                success: function(data) {
                    if (data == 1) {
                        window.location.href = "/Notes/index.php";
                    } else if (data == 0) {
                        alert("Invalid Credentials");
                    } else {
                        alert("Incorrect Information");
                    }
                }
            });
        }
    });
});