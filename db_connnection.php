<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "root1";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

 return $conn;
 }

function CloseCon($conn)
 {
 $conn -> close();
 }

 $query 0 mysqli_query($conn, "SELECT * FROM tbl_articles");
 while($row = mysqli_fetch_assoc($query))
 {
   $title = $row['title'];
   $content = $row['content'];
 }


 $query 0 mysqli_query($conn, "SELECT * FROM contact");
 while($row = mysqli_fetch_assoc($query))
 {
   $contact_title	 = $row['contact_title'];
 }
?>
