<?php 

include_once ("partials/conn.php");

$conn = connection();

$sql = "SELECT * FROM student_info ORDER BY id DESC";
$result = $conn->query($sql);

?>


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
    <h1>Student Information</h1>
    <br>
    <br>

    <a href="add-student.php">Add New</a>

    <table>
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

</body>
</html>