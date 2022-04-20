<!-- add server partials -->
<?php include_once("../server/verify-login.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="card col-md-7 col-lg-5">
                <div class="card-body p-4">
                    <h1 class="card-title mb-4">Login</h1>

                    <form action="" method="post">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Username</span>
                            <input type="text" class="form-control" name="username">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Password</span>
                            <input type="password" class="form-control" name="password">
                        </div>

                        <?php if(isset($errorMsg)){ echo $errorMsg;}?>
                        
                        <button type="submit" class="btn btn-primary" name="login">Login</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>