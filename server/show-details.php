<?php 

//check if you already login
if(!isset($_SESSION)){
    session_start();
}

if(isset($_SESSION['access']) && $_SESSION['access'] == "admin"){
    echo "Welcome ".$_SESSION['username'];
}else{
    header("Location: index.php");
}

//include server partial file
include_once ("../server/connection.php");

//start the connection
$con = connection();

$id = $_GET['id'];

$sql = "SELECT * FROM student_info WHERE id = '$id'";
$result = $con->query($sql) or die ($con->error);
$row = $result->fetch_assoc();

?>