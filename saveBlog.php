<?php
require_once "db_connect.php";
include_once "loginProcess1.php";

// Check if the form is submitted
if (isset($_POST["submit"])) {
    $username = $_SESSION["userName"];
    $articleTitle = $_POST["title"];
    $articleText = $_POST["art_text"];
    $publicationDate = $_POST["pDate"];

    // Perform the database insert operation
    $sql = "INSERT INTO article (title,	articleDate, articleText, userName) 
            VALUES ('$articleTitle', '$publicationDate', '$articleText', '$username' )";

    if ($conn->query($sql)) {
        header("refresh:1;url=view.php");
        echo("<script> alert('Article published successfully') </script>");
       
       
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    } 

    // Close the database connection
    $conn->close();
}
 else {
    echo "<p>Submit not set</p>";
}
?>
