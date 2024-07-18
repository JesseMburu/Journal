
<?php
 $server="localhost"; 
 $user="root";
 $pass="";
 $conn1=new mysqli($server, $user, $pass);
 if($conn1->connect_error){
  echo("error: ".$conn1->connect_error);
 }
 else{
  $sql1="CREATE DATABASE blog_db1";
  if($conn1->query($sql1)){
    echo("Database created successfully");
  }
  else{
    echo("Error in creating database");
}
 }
 ?>
 


