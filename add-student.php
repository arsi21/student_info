<?php 

include_once ("connections/conn.php");

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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
</head>
<body>
   <form action="" method="post">
       <label for="fname-input">First Name</label>
       <input id="fname-input" type="text" name="fname">

       <label for="lname-input">Last Name</label>
       <input id="lname-input" type="text" name="lname">

       <label for="gender-input">Gender</label>
       <select name="gender" id="gender-input">
           <option value="Male">Male</option>
           <option value="Female">Female</option>
       </select>

       <label for="grade-input">Grade Level</label>
       <input id="grade-input" type="number" name="grade">

       <label for="bday-input">Birhtday</label>
       <input id="bday-input" type="date" name="bday">

       <input type="submit" name="submit" value="Submit Form">
   </form>
</body>
</html>