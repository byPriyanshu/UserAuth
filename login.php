<?php 
    $conn = new mysqli("localhost", "root", "", "user-database");
    if (isset($_POST["submit"])) {
        $email = $_POST["email"];    
        $pass = $_POST["pass"];
        $sql = "SELECT * FROM `users-list` WHERE Email = '$email' AND Password = '$pass'";
        $res = $conn -> query($sql);
        if ($res -> num_rows == 1) {
            // Username and password match, redirect to another page
            header("Location: http://localhost/Homepage/index.html");
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
    <title>Login</title>
    <link rel="stylesheet" href="styles/index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <div class="wrapper bg-image">
        <div class="container bg-gradient">
            <form action="" method="POST" id="form">
                <div class="top-section">
                    <h2>Login: </h2>
                </div>
                
                <span class="error"><?php echo isset($error_message) ? $error_message : "&nbsp"; ?></span>       

                <div class="mid-section">
                    <label for="email">Email: </label>
                    <input type="email" name="email" id="email">
                    <label for="pass">Password: </label>
                    <input type="password" name="pass" id="pass">
                    <button type="submit" name="submit">Login</button>
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
            else if (password.val() === '') {
                email.removeClass("input-error");
                error.text("Password is empty!");
                password.addClass("input-error");
                isValid = false;
            }
            else if{
                isValid = false;
                error.text("Invalid email or password!");
                email.addClass("input-error");
                password.addClass("input-error");
            }
            return isValid;
        });
    });
</script>
