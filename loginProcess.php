<?php
session_start();
require_once "db_connect.php";


if(isset($_POST["login"])){
    $emailSign=strtolower(addslashes(($_POST["email1"])));
    $passSign=addslashes($_POST["passUser1"]);
    
}
else{
    echo("sign in not set");
}
if(filter_var($emailSign, FILTER_VALIDATE_EMAIL)){
$qrySignIn="SELECT * FROM author WHERE email='$emailSign'";
$result=$conn->query($qrySignIn);
if($result->num_rows==0){
   echo('<script>
   alert("User does not exist");
   </script>');
 }
if($result->num_rows!=0){
    while($row=$result->fetch_assoc()){
        $userName=$row["userName"];
        $emailDb=$row["email"];
        $passDb=$row["PASSWORD"];
    }
    $_SESSION["userName"]=$userName;
        if(password_verify($passSign, $passDb)){
            if($_SESSION["userName"]){
            header("Location: view.php");
            }
    }
    else{
            echo('<script>
            alert("Incorrect password");
            </script>');
            
        }
}
else{
    echo('<script>
   alert("Invalid email address");
   </script>');
    }

if(!$result){
    echo("Query not executed");
}
}

?>