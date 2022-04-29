<?php
error_reporting(0);
$keyusername = 'pas';
$keypassword = 'admin';

$username = $_POST['username'];
$password = $_POST['password'];
if (isset($username) && isset($password)) {
    if ($username == $keyusername && $password == $keypassword) {
        echo "<script type='text/javascript'>
                setTimeout( function() { window.location.href = 'tableau.html'; }, 1000 )
                </script>";
    } else {
        $alerta =
            '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Oops!</strong> You should check in on some of those fields below.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="icon" href="./logopas.png" type="image/x-icon">
    <title>PAS</title>
</head>

<body>
    <?php
    if(isset($alerta)){
        echo $alerta;
    }
    ?>
    <div class="login-box shadow">
        <div class="login">
            <img id="logo" class="logo" src="logopas.png" alt="PAS Logo">
            <form action="" method="post" autocomplete="FALSE">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" autocomplete="false">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" autocomplete="false">
                    <div id="usernameText" class="form-text">We'll never share your password with anyone else.</div>
                    <div id="error"></div>
                </div>
                <!--
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            --->
                <button type="submit" class="btn btn-primary">Login <i class="bi bi-box-arrow-in-right"></i></button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>