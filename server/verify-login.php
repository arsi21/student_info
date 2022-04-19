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

    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $user = $con->query($sql) or die ($con->error);
    $row = $user->fetch_assoc();
    $total = $user->num_rows;

    //check if username and password match and existing
    if($total > 0){
        $_SESSION['username'] = $row['username'];
        $_SESSION['access'] = $row['access'];
        header("Location: ../client/index.php");
    }else{
        echo "No username found!";
    }
}

?>