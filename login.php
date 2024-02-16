<?php
/* 
$conn = new mysqli('localhost', 'root', '', 'loginfo');
if ($conn->connect_error) {
    die('Connection Error!' . $conn->connect_error);
} else {
    if (isset($_POST["submit"])) {
        $u = $_POST['uname'];
        $p = $_POST['pass'];

        $sql = "SELECT * FROM your_table_name WHERE username = '$u' AND password = '$p'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Username and password match, redirect to another page
            header("Location: dashboard.html");
            exit();
        } else {
            echo "Invalid username or password.";
        }
    }
}
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
    <div class="wrapper bg-image">
        <div class="container bg-gradient">
            <div class="top-section">
                <h2>Login: </h2>
            </div>

            <span class="error">&nbsp</span>

            <div class="mid-section">
                <label for="email">Email: </label>
                <input type="email" name="email" id="email">
                <label for="pass">Password: </label>
                <input type="password" name="pass" id="pass">
                <button type="button">Login</button>
            </div>

            <div class="bottom-section">
                <p>Don't have an account?</p>
                <a href="register.php">Register in</a>
            </div>    
        </div>
    </div>
</body>
</html>

    <!-- <script>
        $(document).ready(function () {
            $("#f").submit(function () {
                a = $("#uname");
                b = $("#pass");
                c = $("#b");
                isValid = true;

                $(".error").remove();
                if (a.val() === '') {
                    a.after("<span class='error'>Please enter username</span>");
                    isValid = false;
                }
                if (b.val() === '') {
                    b.after("<span class='error'>Please enter password</span>");
                    isValid = false;
                }
                if (isValid) {
                    if (b.val().length < 8) {
                        b.after("<span class='error'>Password must be at least 8 characters long</span>");
                        isValid = false;
                    } else {
                        // $("#f")[0].reset(); // Commented out to keep values for testing
                    }
                }
                return isValid;
            });
        }); -->