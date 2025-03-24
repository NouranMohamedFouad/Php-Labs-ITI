<?php

    session_start();
    if($_SESSION['login'] == true){
        header("location:home.php");
    }

    $errors=[];
    $old_data=[];
    if(isset($_GET["errors"])){
        $errors = $_GET["errors"];
        echo "<br>";
        $errors = json_decode($errors, true);
    }
    else if(isset($_GET["notfound"])){
        $notfound="account is not found";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link href="../assets/loginStyle.css" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

<div class="login-card">
    <div class="text-center">
        <h3>Welcome Back!</h3>
        <p>Please login to your account</p>
    </div>

    <form action="../controllers/loginLogic.php" method="POST">

        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email address">
        </div>

        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <div class="text-danger  font-weight-bold">
            <?php  echo $errors["email"] ? "{$errors['email']} " : ""; 
                   echo '<br>';
                  echo $errors["password"] ? "{$errors['password']}" : ""; 
                  echo '<br>';
                  echo $notfound ? "{$notfound}" : ""; 
            ?>

        </div>

        <button type="submit" class="btn btn-secondary">Login</button>
    </form>

    <div class="text-center">
        <p class="mt-3">
            <a href="#">Forgot Password?</a> |
            <a href="register.php">Create an Account</a>
        </p>
    </div>
    
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</body>
</html>