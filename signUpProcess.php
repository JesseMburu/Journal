<?php
require_once "db_connect.php";
if(isset($_POST["register"])){
    $fisrtName=$_POST["firstName"];
    $lastName=$_POST["lastName"];
    $passIn=addslashes($_POST["passUser"]);
    $email=strtolower(addslashes(($_POST["email"])));
    $confirmPass=addslashes($_POST["confirmPass"]);
    $userName=strtolower(addslashes($_POST["userName"]));
    $fullName=ucwords(strtolower(addslashes($fisrtName." ".$lastName)));
}
if(!isset($_POST["register"])){
    echo("here");
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo('<script>
   alert("Invalid email address");
   </script>');
    }

if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    $hashPass=password_hash($confirmPass, PASSWORD_DEFAULT);
    $query=$conn->prepare("INSERT into author(userName, fullName, email, PASSWORD) VALUES(?,?,?,?)");
    $query->bind_param("ssss", $userName, $fullName, $email, $hashPass);
    if(strcmp($passIn,$confirmPass)==0){
        $exec=$query->execute();
    }
    if($exec){
        header("Location: signIn.php");
    }
    else{
        echo("error: Unable to execute query");
    }
}
?>