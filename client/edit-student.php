<!-- add server partials -->
<?php include_once("../server/show-details.php");?>

<?php 
//include server partial file
include_once ("../server/connection.php");

//start the connection
$con = connection();

$id = $_GET['id'];

//check if the submit button is clicked
if(isset($_POST['submit'])){

    //get data from the form
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $grade = $_POST['grade'];
    $bday = $_POST['bday'];

    //query for inserting data into database
    $sql = "UPDATE `student_info` SET first_name = '$fname', 
    last_name = '$lname', 
    gender = '$gender', 
    grade_level = '$grade', 
    birthday = '$bday'
    WHERE id = '$id'";

    //insert data into database
    $con->query($sql) or die ($con->error);

    //redirect to index.php
    header("Location: ../client/details.php?id=".$id);
}

?>


<!-- add client partials -->
<?php include_once("partials/header.php")?>

    <div class="container-md">
        <form action="" method="post">
            <div class="row mb-3">
                <label for="fname-input">First Name</label>
                <div class="col-sm-10">
                    <input id="fname-input" type="text" name="fname" value="<?php echo $row['first_name'];?>">
                </div>
            </div>

            <div class="row mb-3">
                <label for="lname-input">Last Name</label>
                <div class="col-sm-10">
                    <input id="lname-input" type="text" name="lname" value="<?php echo $row['last_name'];?>">
                </div>
            </div>

            <div class="row mb-3">
                <label for="gender-input">Gender</label>
                <div class="col-sm-10">
                    <select name="gender" id="gender-input">
                        <option value="Male" <?php echo ($row['gender'] == "Male")? 'selected' : '';?>>Male</option>
                        <option value="Female" <?php echo ($row['gender'] == "Female")? 'selected' : '';?>>Female</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <label for="grade-input">Grade Level</label>
                <div class="col-sm-10">
                    <input id="grade-input" type="number" name="grade" value="<?php echo $row['grade_level'];?>">
                </div>
            </div>

            <div class="row mb-3">
                <label for="bday-input">Birhtday</label>
                <div class="col-sm-10">
                    <input id="bday-input" type="date" name="bday" value="<?php echo $row['birthday'];?>">
                </div>
            </div>

            <input type="submit" name="submit" class="btn btn-primary" value="Edit Student">
        </form>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- add client partials -->
<?php include_once("partials/footer.php")?>