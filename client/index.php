<?php 

//check if you already login
if(!isset($_SESSION)){
    session_start();
}

if(isset($_SESSION['username'])){
    echo "Welcome ".$_SESSION['username'];
}else{
    echo "Welcome Guest";
}

?>

<!-- add server partials -->
<?php include_once("../server/display.php")?>

<!-- add client partials -->
<?php include_once("partials/header.php")?>


    <div class="container">
        <h1 class="h3">Student List</h1>

        <a href="add-student.php" class="btn btn-primary btn-sm"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add New Student">Add New</a>
        
        <?php if(isset($_SESSION['username'])){?>
        <a href="../server/logout.php">Logout</a>
        <?php }?>
    </div>

    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                </tr>
            </thead>
        
            <tbody>
        <?php //output data of each row
        while($row = $result->fetch_assoc()) {?>
                <tr>
                    <td><?php echo $row['first_name']; ?></td>
                    <td><?php echo $row['last_name']; ?></td>
                </tr>
        <?php }?>
            </tbody>
        </table>
    </div>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/tooltip.js"></script>

<!-- add client partials -->
<?php include_once("partials/footer.php")?>