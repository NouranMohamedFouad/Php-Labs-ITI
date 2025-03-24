<?php

    require_once "../mysqli/databaseOperations.php";

    $errors=[];
    $old_data=[];
    if(isset($_GET["errors"])){
        $errors = $_GET["errors"];
        echo "<br>";
        $errors = json_decode($errors, true);
    }

    if(isset($_GET["old"])){
        $old_data=$_GET["old"];
        $old_data = json_decode($old_data, true);
    }


    $idToUpdate = $_POST['id'];
    $data=selectById($idToUpdate);


    

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="../assets/stylesheet.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h2 class="text-center mb-4">Register</h2>

    <form action="../controllers/updateLogic.php" method="post" class="shadow p-4 rounded form"  enctype="multipart/form-data">

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control"
            value='<?php echo isset($old_data["name"]) ? $old_data["name"] : (isset($data["name"]) ? $data["name"] : ""); ?>'
            >
            <div class="text-danger  font-weight-bold">
                <?php  echo isset($errors["name"]) ? "{$errors['name']}" : ""; ?>
            </div>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" 
            value='<?php echo isset($old_data["email"]) ? $old_data["email"] : (isset($data["email"]) ? $data["email"] : ""); ?>'
            required>
        </div>

        <div class="text-danger  font-weight-bold">
                <?php  echo isset($errors["email"]) ? "{$errors['email']}" : ""; ?>
        </div>

        


        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" 
            value='<?php echo isset($old_data["password"]) ? $old_data["password"] : (isset($data["password"]) ? $data["password"] : ""); ?>'
            >
        </div>
        <div class="text-danger  font-weight-bold">
                <?php  echo isset($errors["password"]) ? "{$errors['password']}" : ""; ?>
        </div>

        <div class="mb-3">
            <label for="confirm_password" class="form-label">Confirm Password:</label>
            <input type="password" class="form-control" id="confirm_password" name="confirm_password" 
            value='<?php echo isset($old_data["confirm_password"]) ? $old_data["confirm_password"] : "" ?>'
            required>
        </div>
        <div class="text-danger  font-weight-bold">
            <?php  echo isset($errors["confirm_password"]) ? "{$errors['confirm_password']}" : ""; ?>
        </div>


        <div class="mb-3">
            <label for="room" class="form-label">Room No.:</label>
            <select class="form-select" id="room" name="room">
                <option value="Application1">Application1</option>
                <option value="Application2">Application2</option>
                <option value="Cloud">Cloud</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="ext" class="form-label">Extension:</label>
            <input type="text" class="form-control" id="ext" name="ext"
            value='<?php echo isset($old_data["ext"]) ? $old_data["ext"] : (isset($data["ext"]) ? $data["ext"] : ""); ?>'
            >
        </div>
        <div class="text-danger  font-weight-bold">
            <?php  echo isset($errors["ext"]) ? "{$errors['ext']}" : ""; ?>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Profile Picture:</label>
            <input type="file" class="form-control" id="file" name="image"  required>
        </div>

        <div class="text-danger  font-weight-bold">
            <?php  echo isset($errors["image"]) ? "{$errors['image']}" : ""; ?>
        </div>

        <input type='hidden' name='id'
        value='<?php echo isset($idToUpdate) ? $idToUpdate :"" ; ?>'
        >


        <button type="submit" class="btn btn-primary w-100">Register</button>
        <button type="reset" class="btn btn-secondary w-100 mt-2">Reset</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>















