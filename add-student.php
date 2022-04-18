<?php include_once ("add.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Student Information</title>
</head>
<body>
   <form action="add.php" method="post">
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