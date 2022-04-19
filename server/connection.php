<?php
function connection(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "student_system";

    //Create connection
    $con = new mysqli($servername, $username, $password, $dbname);
    
    //Check connection
    if($con->connect_error){
        die("Connection failed: " . $con->connect_error);
    } else {
        return $con;
    }
}
?>