<?php
    require_once "./utils.php";
    require_once "helpers.php";


    $formDataIssues = validatePostData($_POST);
    $formErrors = $formDataIssues["errors"];
    $oldData= $formDataIssues["valid_data"];

    print_r($formErrors);

    if(count($formErrors)) {
        $errors = json_encode($formErrors);
        $queryString ="errors={$errors}";
        $old_data = json_encode($oldData);
        if($old_data){
            $queryString .= "&old={$old_data}";
        }
        header("location:form.php?{$queryString}");
    }
    else {

            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $address = $_POST['address'];
            $country = $_POST['country'];
            $gender = $_POST['gender'];
            $skills =isset($_POST['skills'])? implode(", ", $_POST['skills']) : "None";
            //$skills =implode(", ", $_POST['skills'])?? "None";
            $username = $_POST['username'];
            $password = $_POST['password'];
            $department = $_POST['department'];

            $id = addID();

            $info = "{$id}:{$first_name}:{$last_name}:{$address}:{$country}:{$gender}:{$skills}:{$username}:{$password}:{$department}\n";

            $saved = appendDataTofile("customers.txt", $info);
            if (strtolower($gender) == "female") {
                $title = "Mrs.";
            } else {
                $title = "Mr.";
            }

            $full_name=$title." ".$first_name." ".$last_name;

            if($saved) {
                echo '<h1 class="mt-5 fw-bold text-primary">Thanks ' . $full_name . '</h1>';
                echo '<div class="text-end mt-4">
                        <a class="btn btn-primary btn-lg shadow-lg rounded-pill px-4 py-2 fw-bold" href="customerRetrieval.php">
                            Display All Customers
                        </a>
                    </div>';
            }else{
                echo '<h1 class="mt-5 fw-bold text-danger">Contact Support</h1>';
            }      
}

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
        h1{
            color:white;
            margin-left:20%;
        }
        .review{
            font-size:larger;
            border-radius:10px;
            padding:3px;
            border:2px solid black;
            box-shadow:5px 5px 10px black;

        }
    </style>
</head>
<body>

<div id="resultCard" class="mt-4">
    <div class="card shadow">
        <div class="card-body">
            <p class="review">
                <strong>Please Review Your Information</strong>
            </p>
            
            <p>
                <strong>Address:</strong> 
                <?php echo $address;?>
            </p>
            <p>
                <strong>Country:</strong>
                <?php echo $country;?>
            </p>
            <p>
                <strong>Skills:</strong>
                <?php echo $skills;?>
            </p>
            <p>
                <strong>Username:</strong> 
                <?php echo $username;?>
            </p>
            <p>
                <strong>Department:</strong>
                <?php echo $department;?>
            </p>
            
        </div>
    </div>
</div>

</body>
