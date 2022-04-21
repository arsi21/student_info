<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Student Information</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">StudentInfo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse d-flex-md justify-content-between" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <form class="d-flex pl-2" action="result.php" method="get">
                        <input class="form-control me-2" type="search" placeholder="Search" name="search">
                        <button class="btn btn-outline-light" type="submit" name="searchBtn">Search</button>
                    </form>
                </div>

                <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php //check if you already login
                        if(!isset($_SESSION)){
                            session_start();
                        }

                        if(isset($_SESSION['username'])){
                            echo $_SESSION['username'];
                        }else{
                            echo "Guest";
                        }
                        ?>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <?php if(isset($_SESSION['username'])){?>
                            <a class="dropdown-item" href="../server/logout.php">Logout</a>
                            <?php }else{?>
                            <a class="dropdown-item" href="login.php">Login</a>
                            <a class="dropdown-item" href="signup.php">Signup</a>
                            <?php }?>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </nav>