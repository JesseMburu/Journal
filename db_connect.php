<?php
     $server="localhost"; 
     $user="root";
     $pass="";
     $dbName="blog_db1";
     $conn=new mysqli($server, $user, $pass, $dbName);
    /* if($conn->connect_error){
        echo("Error: ". $conn->connect_error);
     }
     else{
        echo("Connection Successfull");
     }
     */
?>