<?php
    require_once "./utils.php";

    generateTitle("Registration Details", "white", 1);

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $gender = $_POST['gender'];
    $skills =implode(", ", $_POST['skills']);
    $username = $_POST['username'];
    $password = $_POST['password'];
    $department = $_POST['department'];
    $captcha = $_POST['captcha'];

    $full_name=$first_name." ".$last_name;



?>
<head>
    <style>
        body{
            background-color: rgb(32, 30, 30);
            display: flex;
            justify-content: center;
            align-items: center;

        }
        .card-body{
            background-color: rgba(228, 228, 228, 0.849);
            text-align: center;
        }
    </style>
</head>
<body>

<div id="resultCard" class="mt-4">
    <div class="card shadow">
        <div class="card-body">
            <p><strong>Name:</strong>
                    <?php echo $full_name;?>
                </span></p>
            <p><strong>Address:</strong> <span id="displayEmail">
                     <?php echo $address;?>
                </span></p>
            <p>
                <strong>Country:</strong> <span id="displaySubject">
                    <?php echo $country;?>
                </span>
            </p>
            <p>
                <strong>Gender:</strong> <span id="displaySubject">
                    <?php echo $gender;?>
                </span>
            </p>
            <p>
                <strong>Skills:</strong> <span id="displaySubject">
                    <?php echo $skills;?>
                </span>
            </p>
            <p>
                <strong>Username:</strong> <span id="displaySubject">
                    <?php echo $username;?>
                </span>
            </p>
            <p>
                <strong>Department:</strong> <span id="displaySubject">
                    <?php echo $department;?>
                </span>
            </p>
            
        </div>
    </div>
</div>

</body>
