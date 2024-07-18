
<?php
 $server1="localhost"; 
 $user1="root";
 $pass1="";
 $db1_name="blog_db1";
 $conn2=new mysqli($server1, $user1, $pass1, $db1_name);
 $sql2="CREATE TABLE author  (
   userName varchar(100) NOT NULL,
   fullName varchar(100) DEFAULT NULL,
   email varchar(100) DEFAULT NULL,
   PASSWORD varchar(255) DEFAULT NULL,
    PRIMARY KEY (userName),
   UNIQUE KEY email (email)
 )";
 $sql3=" CREATE TABLE article (
    title varchar(100) NOT NULL,
    articleDate date DEFAULT NULL,
    articleText text DEFAULT NULL,
    userName varchar(100) NOT NULL,
     PRIMARY KEY (title,userName),
    FOREIGN KEY (userName) REFERENCES author (userName)
  )";

 if($conn2->query($sql2)){
  echo("Table 1 Created successfully");
 }
 else{
  echo("Tables 1 not created");
 }
 if($conn2->query($sql3)){
    echo("Table 2 Created successfully");
   }
   else{
    echo("Table 2 not created");
   }

 ?>



