<?php 
//include connection
include_once ("../server/conn.php");

//start connection
$conn = connection();

//for displaying all the names
$sql = "SELECT * FROM student_info ORDER BY id DESC";
$result = $conn->query($sql);

?>