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
    <div class="container-md">
        <form action="add.php" method="post">
            <div class="row mb-3">
                <label for="fname-input">First Name</label>
                <div class="col-sm-10">
                    <input id="fname-input" type="text" name="fname">
                </div>
            </div>

            <div class="row mb-3">
                <label for="lname-input">Last Name</label>
                <div class="col-sm-10">
                    <input id="lname-input" type="text" name="lname">
                </div>
            </div>

            <div class="row mb-3">
                <label for="gender-input">Gender</label>
                <div class="col-sm-10">
                    <select name="gender" id="gender-input">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <label for="grade-input">Grade Level</label>
                <div class="col-sm-10">
                    <input id="grade-input" type="number" name="grade">
                </div>
            </div>

            <div class="row mb-3">
                <label for="bday-input">Birhtday</label>
                <div class="col-sm-10">
                    <input id="bday-input" type="date" name="bday">
                </div>
            </div>

            <input type="submit" name="submit" class="btn btn-primary" value="Submit Form">
        </form>
    </div>
</body>
</html>