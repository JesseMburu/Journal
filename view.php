<!DOCTYPE <!DOCTYPE html>
<html lang="en">
<?php
require_once "loginProcess1.php";
require_once "db_connect.php";
include_once "head.php"; 
include_once "headersIn.php";
?>

<body style="background-image:url(https://wallup.net/wp-content/uploads/2018/09/26/12087-blue-gaussian-blur.jpg) ; background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;">
    <br><br><br> 
    <div id="please">
<?php
if(empty($_SESSION["userName"])){
 echo("Please login to view this page <br><br>");
 ?>
    <a href="signIn.php"><button type="button">Sign in</button></a>  </div>
    <?php  
}
else{
?>


<?php
$viewQry=("SELECT title, articleDate, articleText, fullName FROM article join author on article.userName=author.userName ORDER BY articleDate DESC limit 4");
$result=$conn->query($viewQry);
if($result->num_rows==0){
    print("<span style='font-family:Comic Sans MS'>No records available yet</span>");
}
if($result->num_rows!=0){
    ?>
    <div id="viewTable">
    <table>
        <caption><b>Articles</b></caption>
        <colgroup span=2 style="width:21%;">
    </colgroup>
    <colgroup span=1 style="width:41%;">
    </colgroup>
        <tr>
            <th>Article title</th>
            <th>Date published</th>
            <th>Text</th>
            <th>Author</th>
        </tr>
    <?php
    while($row=$result->fetch_assoc()){
        $title = $row["title"];
        $articleDate = $row["articleDate"];
        $articleText = $row["articleText"];
        $fullName = $row["fullName"]; 
        print("<tr>
            <td>$title</td>
            <td>$articleDate</td>
            <td>$articleText</td>
            <td>$fullName</td>
        </tr>");
 }
    ?>
    </table>
</div>
</body>
    <?php
}
if(empty($result)){
    print "Query not executed";
}
}
?>
</html>