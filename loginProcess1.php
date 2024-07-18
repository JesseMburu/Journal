<?php
session_start();
require_once "db_connect.php";
if(isset($_POST["login"])){
   
    $emailLog=strtolower(addslashes($_POST["email1"]));
    $passLog=addslashes($_POST["passUser1"]);
    

if(filter_var($emailLog, FILTER_VALIDATE_EMAIL)){
    $qryLog="SELECT * FROM author WHERE email='$emailLog'";
    $result=$conn->query($qryLog);
    if($result->num_rows==0){
        header("refresh:1;url=signIn.php");
        echo("<script> alert('User not found') </script>");
    }
    if($result->num_rows!=0){
        while($row=$result->fetch_assoc()){
            $passDb = $row["PASSWORD"];
            $userDb = $row["userName"];
        }
    }
    if(password_verify($passLog,$passDb)){
        $_SESSION["userName"]=$userDb;
        header ("Location: view.php");
    }
    if(!password_verify($passLog,$passDb)){
        header("refresh:1;url=signIn.php");
        echo("<script> alert('Wrong password') </script>");
    }

}
}