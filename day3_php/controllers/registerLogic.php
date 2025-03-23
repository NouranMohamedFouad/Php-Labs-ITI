<?php
    require_once "../includes/utils.php";
    require_once "../helpers/addUser.php";
    require_once "../validations/validate.php";



    $formDataIssues = validatePostData($_POST);
    $formErrors = $formDataIssues["errors"];
    $oldData= $formDataIssues["valid_data"];

    if(count($formErrors)) {
        $errors = json_encode($formErrors);
        $queryString ="errors={$errors}";
        $old_data = json_encode($oldData);
        if($old_data){
            $queryString .= "&old={$old_data}";
        }
        header("location:../app/register.php?{$queryString}");
    }
    else {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];
            $room = $_POST['room'];
            $ext = $_POST['ext'];
            //$profile_picture = $_POST['profile_picture'];

         
            $id = addID();

            $info = "{$id}:{$name}:{$email}:{$password}:{$room}:{$ext}\n";

            $saved = appendDataTofile("../data/users.txt", $info);

            if($saved) {
                echo '<h1 class="mt-5 fw-bold text-primary">Thanks ' . $name . '</h1>';
                echo '<div class="text-end mt-4">
                        <a class="btn btn-primary btn-lg shadow-lg rounded-pill px-4 py-2 fw-bold" href="../app/usersRetrieval.php">
                            Display All Users
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
                <strong>Name:</strong> 
                <?php echo $name;?>
            </p>
            <p>
                <strong>Email:</strong>
                <?php echo $email;?>
            </p>
            <p>
                <strong>Password:</strong>
                <?php echo $password;?>
            </p>
            <p>
                <strong>Room no.:</strong> 
                <?php echo $room;?>
            </p>
            <p>
                <strong>Extension:</strong>
                <?php echo $ext;?>
            </p>
            
        </div>
    </div>
</div>

</body>
