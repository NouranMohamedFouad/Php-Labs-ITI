<?php


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
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="stylesheet.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h2 class="text-center mb-4">Registration Form</h2>

    <form action="register.php" method="post" class="shadow p-4 rounded form">

        <div class="mb-3">
            <label class="form-label">First Name</label>
            <input type="text" name="first_name" class="form-control"
            value='<?php echo $old_data["first_name"]? $old_data["first_name"]: ""  ?>'
            >
            <div class="text-danger  font-weight-bold">
                <?php  echo $errors["first_name"] ? "{$errors['first_name']}" : ""; ?>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Last Name</label>
            <input type="text" name="last_name" class="form-control"
            value='<?php echo $old_data["last_name"]? $old_data["last_name"]: ""  ?>'
            >
            <div class="text-danger  font-weight-bold">
                    <?php  echo $errors["last_name"] ? "{$errors['last_name']}" : ""; ?>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Address</label>
            <textarea name="address" class="form-control" rows="2"><?php echo $old_data["address"]? $old_data["address"]: ""  ?>
            </textarea>
            <div class="text-danger  font-weight-bold">
                        <?php  echo $errors["address"] ? "{$errors['address']}" : ""; ?>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Country</label>
            <select name="country" class="form-select">
                <option value="Egypt">Egypt</option>
                <option value="Australia">Australia</option>
                <option value="Canada">Canada</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Gender</label> <br>
            <div class="form-check form-check-inline">
                <input type="radio" name="gender" value="Male" class="form-check-input" required>
                <label class="form-check-label">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" name="gender" value="Female" class="form-check-input">
                <label class="form-check-label">Female</label>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Skills</label> <br>
            <div class="form-check form-check-inline">
                <input type="checkbox" name="skills[]" value="PHP" class="form-check-input">
                <label class="form-check-label">PHP</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" name="skills[]" value="MySQL" class="form-check-input">
                <label class="form-check-label">MySQL</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" name="skills[]" value="J2EE" class="form-check-input">
                <label class="form-check-label">J2EE</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" name="skills[]" value="PostgreSQL" class="form-check-input">
                <label class="form-check-label">PostgreSQL</label>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="username" class="form-control" 
            value='<?php echo $old_data["username"]? $old_data["username"]: ""  ?>'
            >
            <div class="text-danger  font-weight-bold">
                        <?php  echo $errors["username"] ? "{$errors['username']}" : ""; ?>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" 
            value='<?php echo $old_data["password"]? $old_data["password"]: ""  ?>'
            >
            <div class="text-danger  font-weight-bold">
                        <?php  echo $errors["password"] ? "{$errors['password']}" : ""; ?>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Department</label>
            <input type="text" name="department" class="form-control" 
            value='<?php echo $old_data["department"]? $old_data["department"]: ""  ?>'
            >
            <div class="text-danger  font-weight-bold">
                        <?php  echo $errors["department"] ? "{$errors['department']}" : ""; ?>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Captcha</label>
            <p id="captchaText" style="font-weight: bold; color: blue;"></p>

            <input type="text" id="captchaInput" name="captcha" class="form-control" required oninput="validateCaptcha()">
            <p id="captchaError" style="color: red; display: none;">Incorrect Captcha, Please Try again.</p>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary" id="submit" disabled>Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
        
    </form>

    <script>
       const captcha = "X7G4Y";
        document.getElementById("captchaText").innerText = captcha;

        function validateCaptcha() {
            let userCaptcha = document.getElementById("captchaInput").value;
            let errorMessage = document.getElementById("captchaError");

            if (userCaptcha !== captcha) {
                errorMessage.style.display = "block";
                document.getElementById("submit").disabled=true; 
            } else {
                errorMessage.style.display = "none";
                document.getElementById("submit").disabled=false; 
            }
        }
    </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
