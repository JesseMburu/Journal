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
    <div id="signup">
       <form id="signUpForm" action="signUpProcess.php" method="POST">
           <label for="firstName">First name</label>
           <br>
           <input type="text" name="firstName" required autocomplete="off" autofocus maxlength="50">
           <br><br>
           <label for="lastName">Last name</label>
           <br>
           <input type="text" name="lastName" required autocomplete="off" maxlength="50">
           <br><br>
           <label for="email">Email address</label>
           <br>
           <input type="text" name="email" required autocomplete="off" placeholder="example@any.com" maxlength="100">
           <br><br>
           <label for="passUser">Password</label>
           <br>
           <input type="password" name="passUser" required autocomplete="off" maxlength="50" >
           <br><br>
           <label for="confirmPass">Confirm Password</label>
           <br>
           <input type="password" name="confirmPass" required autocomplete="off" maxlength="50">
           <br><br>
           <label for="userName">Username</label>
           <br>
           <input type="text" name="userName" required autocomplete="off" >
           <br><br>
           <input type="submit" value="register" name="register">
       </form>
    </div>
    </body>
</html>