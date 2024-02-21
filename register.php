<<<<<<< HEAD
=======
<?php
    $conn = new mysqli("localhost", "root", "", "user-database");
    if (isset($_POST["submit"])) {
        $email = $_POST["email"];        
        $pass = $_POST["pass"];
        $uname = substr($email, 0, strpos($email, "@"));
        $sql = "INSERT INTO `users-list` (Email, Password, Username) VALUES ('$email', '$pass', '$uname')";
        if($conn -> query($sql)){
            echo ("<script>alert('Data inserted sucessfuly! This page is going to reload!');</script>");
        }
    }
?>

>>>>>>> php
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
=======
            <form action="" method="POST" id="form">
>>>>>>> php
                <div class="top-section">
                    <h2>Register: </h2>
                </div>
    
                <span class="error">&nbsp</span>
    
                <div class="mid-section">
                    <label for="email">Email: </label>
                    <input type="email" name="email" id="email">
                    <label for="pass">Password: </label>
                    <input type="password" name="pass" id="pass">
                    <label for="cpass">Confirm Password: </label>
                    <input type="password" name="cpass" id="cpass">
<<<<<<< HEAD
                    <button type="submit">Sign up</button>
=======
                    <button type="submit" name="submit">Sign up</button>
>>>>>>> php
                </div>
    
                <div class="bottom-section">
                    <p>Already have an account?</p>
                    <a href="login.php">Log in</a>
                </div>    
            </form>
        </div>
    </div>
</body>
</html>
<script>
    $(document).ready(function () {
        $("#form").submit(function () {
<<<<<<< HEAD
            email = $("#email");
            password = $("#pass");
            cpassword = $("#cpass");
            error = $(".error");
            isValid = true;
=======
            let email = $("#email");
            let password = $("#pass");
            let cpassword = $("#cpass");
            let error = $(".error");
            let isValid = true;
>>>>>>> php

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
                    if(cpassword.val() !== password.val()){
                        error.text("Confirm Password must be same to Password!");
                        cpassword.addClass("input-error");
                        return false;
                    }
                    else{
                        password.removeClass("input-error");
                        cpassword.removeClass("input-error");
                        // $("#form")[0].reset(); // Commented out to keep values for testing
                    }
                }
            }
            return isValid;
        });
    });
</script>
<<<<<<< HEAD
=======

>>>>>>> php
