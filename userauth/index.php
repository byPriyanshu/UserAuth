<?php
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<body>
    <form id="f" action="" method="post">
        <label for="uname">Username</label><br>
        <input type="text" name="uname" id="uname"><br>
        <label for="pass">Password:</label><br>
        <input type="text" name="pass" id="pass"><br><br>
        <button type="submit" id="b" name="submit">Submit</button>
    </form>
    <script>
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
        });
    </script>
</body>
</html>
