<?php 

include_once ("partials/conn.php");

$conn = connection();

if(isset($_POST['submit'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $grade = $_POST['grade'];
    $bday = $_POST['bday'];

    $sql = "INSERT INTO `student_info`(`first_name`, `last_name`, 
    `gender`, `grade_level`, `birthday`) VALUES ('$fname', '$lname', '$gender', '$grade', '$bday')";

    $conn->query($sql) or die ($conn->error);

    echo header("Location: index.php");
}

?>