<!-- add server partials -->
<?php include_once("../server/show-details.php");?>

<!-- add client partials -->
<?php include_once("partials/header.php")?>

    <h2><?php echo $row['first_name']?> <?php echo $row['last_name']?></h2>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- add client partials -->
<?php include_once("partials/footer.php")?>