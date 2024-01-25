<?php

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
    <form id="f"action="dashboard.html" method="post">
        <label for="uname">Username</label><br>
        <input type="text" name="uname" id="uname"><br>
        <label for="pass">Password:</label><br>
        <input type="text" name="pass" id ="pass"><br><br>
        <button type="submit" id="b">Submit</button>
    </form>
    <script>
        $(document).ready(function(){
            $("#f").submit(function(){
                a=$("#uname")
                b=$("#pass")
                c=$("#b")
                isValid=true

            $(".error").remove()
            if(a.val()===''){
                a.after("<span class='error'>Please enter username</span>")
                isValid=false
            }    
            if(b.val()===''){
                b.after("<span class='error'>Please enter password</span>")
                isValid=false
            }  
            if(isValid){
                if(b.val().length<8){
                    b.after("<span class='error'>Password must be at least 8 character long</span>")
                    isValid=false
                }
                else{
                    $("#f")[0].reset()
                }
            }  
            })
        });
    </script>
</body>
</html>