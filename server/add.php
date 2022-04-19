<?php 
//include server partial file
include_once ("../server/conn.php");

//start the connection
$conn = connection();

//check if the submit button is clicked
if(isset($_POST['submit'])){

    //get data from the form
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $grade = $_POST['grade'];
    $bday = $_POST['bday'];

    //query for inserting data into database
    $sql = "INSERT INTO `student_info`(`first_name`, `last_name`, 
    `gender`, `grade_level`, `birthday`) VALUES ('$fname', '$lname', '$gender', '$grade', '$bday')";

    //insert data into database
    $conn->query($sql) or die ($conn->error);

    //redirect to index.php
    header("Location: ../client/index.php");
}

?>