<?php 
//include connection
include_once ("../server/conn.php");

$conn = connection();

$sql = "SELECT * FROM student_info ORDER BY id DESC";
$result = $conn->query($sql);

?>