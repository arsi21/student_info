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
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">StudentInfo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link" href="#">Login</a>
                    <a class="nav-link" href="#">Signup</a>
                </div>
            </div>

            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
        </div>
    </nav>

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

            <input type="submit" name="submit" class="btn btn-primary" value="Add Student">
        </form>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>