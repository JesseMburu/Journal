<!DOCTYPE html>
<html>
<?php
   require_once "db_connect.php";
   require_once "loginProcess1.php";
   include_once "head.php";
   ?>
   <body style="background-image:url(https://wallup.net/wp-content/uploads/2018/09/26/12087-blue-gaussian-blur.jpg) ; background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;">
   <?php
   
if(empty($_SESSION["userName"])){
    ?>
    <div id="please">
    <br><br><br>
    <?php
 echo("Please login to view this page <br><br>");
 ?>
    <a href="signIn.php"><button type="button">Sign in</button></a>
</div>  
    <?php  
}
else{
   ?>


    <?php
    $assure=$_SESSION["userName"];
    include_once "headersIn.php";
    ?>
    <div id="blogin">
<h1>Author's Blog</h1>
    <form action="saveBlog.php " method="POST">

        <label for="userName">User name</label><br>
        <input type="text" name="userName" value="<?php print($assure)?>" disabled><br><br>
        <label>Article's Title</label><br>
        <input type="text" id="title" name="title" required autocomplete="off" maxlength="100"><br><br>

        <label>Text</label><br>
        <textarea id="art_text" name="art_text" rows="4" required autocomplete="off"></textarea><br><br>

        <label>Publication date</label><br>
        <input type="date" id="pDate" name="pDate"  required ><br><br>

        <input type="submit" name="submit" value="submit"><br><br>

        
    </form>
    
    </div>
</form>
<?php
}
?>

