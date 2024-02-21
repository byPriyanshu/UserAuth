<?php 
    $conn = new mysqli("localhost", "root", "", "user-database");
    if (isset($_POST["submit"])) {
        $email = $_POST["email"];    
        $pass = $_POST["pass"];
        $sql = "SELECT * FROM `users-list` WHERE Email = '$email' AND Password = '$pass'";
        $res = $conn -> query($sql);
        if ($res -> num_rows == 1) {
            // Username and password match, redirect to another page
            header("Location: ");
            exit();
        } 
        else {
            $error_message = "Invalid email or password.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles/index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <div class="wrapper bg-image">
        <div class="container bg-gradient">
<<<<<<< HEAD
            <form action="" id="form">
                <div class="top-section">
                    <h2>Login: </h2>
                </div>

                <span class="error">&nbsp</span>

=======
            <form action="" method="POST" id="form">
                <div class="top-section">
                    <h2>Login: </h2>
                </div>
                
                <span class="error"><?php echo isset($error_message) ? $error_message : ""; ?>&nbsp</span>       
                
>>>>>>> php
                <div class="mid-section">
                    <label for="email">Email: </label>
                    <input type="email" name="email" id="email">
                    <label for="pass">Password: </label>
                    <input type="password" name="pass" id="pass">
<<<<<<< HEAD
                    <button type="submit">Login</button>
=======
                    <button type="submit" name="submit">Login</button>
>>>>>>> php
                </div>

                <div class="bottom-section">
                    <p>Don't have an account?</p>
                    <a href="register.php">Register in</a>
                </div>    
            </form>
        </div>
    </div>
</body>
</html>
<script>
    $(document).ready(function () {
        $("#form").submit(function () {
            email = $("#email");
            password = $("#pass");
            error = $(".error");
            isValid = true;

            if (email.val() === '') {
                if (password.val() === '') {
                    error.text("Email and Password are empty!");
                    email.addClass("input-error");
                    password.addClass("input-error");
                }
                else{
                    error.text("Email is empty!");
                    email.addClass("input-error");
                }
                return false; //To fix the bug of Above conditions being skipped by below
            }
            if (password.val() === '') {
                email.removeClass("input-error");
                error.text("Password is empty!");
                password.addClass("input-error");
                isValid = false;
            }
            if (isValid) {
                email.removeClass("input-error");
                if (password.val().length < 8) {
                    error.text("Password length must be greater than 7!")
                    password.addClass("input-error");
                    isValid = false;
                }
                else {
                    password.removeClass("input-error");
                    // $("#form")[0].reset(); // Commented out to keep values for testing
                }
            }
            return isValid;
        });
    });
</script>
