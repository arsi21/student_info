<!-- add client partials -->
<?php include_once("partials/header.php")?>

    <div class="container-md">
        <form action="../server/add.php" method="post">
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

    <!-- add client partials -->
<?php include_once("partials/footer.php")?>