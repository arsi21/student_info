<?php 
//include server partial file
include_once ("../server/connection.php");

//start the connection
$con = connection();

$id = $_GET['id'];

$sql = "SELECT * FROM student_info WHERE id = '$id'";
$result = $con->query($sql) or die ($con->error);
$row = $result->fetch_assoc();

?>