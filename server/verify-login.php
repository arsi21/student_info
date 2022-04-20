<?php 

//check if you already login
if(!isset($_SESSION)){
    session_start();
}

//include server partial file
include_once ("connection.php");

//start the connection
$con = connection();

//check if login button is clicked
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sqlCheckUser = "SELECT * FROM user WHERE username = '$username'";
    $user = $con->query($sqlCheckUser) or die ($con->error);
    $rowUser = $user->fetch_assoc();
    $totalUser = $user->num_rows;

    //check if username existing
    if($totalUser > 0){

        $sqlCheckMatch = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
        $match = $con->query($sqlCheckMatch) or die ($con->error);
        $rowMatch = $match->fetch_assoc();
        $totalMatch = $match->num_rows;

        //check if username and password match
        if($totalMatch > 0){
            $_SESSION['username'] = $rowUser['username'];
            $_SESSION['access'] = $rowUser['access'];

            //redirect to index.php
            header("Location: ../client/index.php");
        }else{

            $errorMsg = '
                <div class="alert alert-warning" role="alert">
                    Wrong password!
                </div>
            ';
        }
        
    }else{
        $errorMsg = '
                <div class="alert alert-danger" role="alert">
                    No username found!
                </div>
        ';
    }
}

?>