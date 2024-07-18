<!DOCTYPE <!DOCTYPE html>

<html lang="en">
<?php
    include_once "head.php"
    ?>
    <body style="background-image:url(https://wallup.net/wp-content/uploads/2018/09/26/12087-blue-gaussian-blur.jpg) ; background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;">  
    <?php
    include_once "headersOrigin.php"
    ?>
    <div id="signin">
        <form action="loginProcess1.php" method="post" >
            <label for="email1">Email address</label>
            <br>
            <input type="text" name="email1" autofocus required autocomplete maxlength="100">
            <br><br>
            <label for="passUser1">Password</label>
            <br>
            <input type="password" name="passUser1" required autocomplete="off" maxlength="50">
            <br><br>
            <input type="submit" name="login" value="login">
        </form>
    </div>
    </body>
</html>