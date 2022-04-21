<!-- add server partials -->
<?php include_once("../server/show-details.php");?>

<!-- add client partials -->
<?php include_once("partials/header.php")?>

    <div class="container">
        <div class="d-flex mt-2 mb-3">
            <a class="btn btn-outline-dark" href="index.php">
            <i class="bi bi-arrow-left-circle"></i> back</a>

            <a class="btn btn-secondary mx-2" href="edit-student.php?id=<?php echo $row['id']?>">Edit</a>
            
            <form action="../server/delete.php" method="post">
                <input type="hidden" value="<?php echo $row['id']?>" name="id">
                <button type="submit" name="delete" class="btn btn-danger">Delete</button>
            </form>
        </div>

        <p class="mb-0">Name:</p>
        <h2><?php echo $row['first_name']?> <?php echo $row['last_name']?></h2>

        <p class="mb-0">Gender:</p>
        <p class="lead"><?php echo $row['gender']?></p>

        <p class="mb-0">Grade Level:</p>
        <p class="lead"><?php echo $row['grade_level']?></p>

        <p class="mb-0">Birthday:</p>
        <p class="lead"><?php echo $row['birthday']?></p>

        <p class="mb-0">Date Enroll:</p>
        <p class="lead"><?php echo $row['date_enroll']?></p>

    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- add client partials -->
<?php include_once("partials/footer.php")?>