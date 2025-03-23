<?php
    require_once "../includes/utils.php";
    require_once "../helpers/addUser.php";
    require_once "../validations/validate.php";
    require_once "../helpers/idHandlation.php";




    $formDataIssues = validatePostData($_POST);
    $formErrors = $formDataIssues["errors"];
    $oldData= $formDataIssues["valid_data"];


    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $matched=isPasswordMatch($password,$confirm_password);
    if(!$matched){
        $formErrors["confirm_password"]="confirm password didn't match";
    }

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
            $room = $_POST['room'];
            $ext = $_POST['ext'];

            $image_name = $_FILES['image']['name'];
            $image_size = $_FILES['image']['size'];
            $image_tmp = $_FILES['image']['tmp_name'];

            $valid_extensions = array("jpeg", "jpg", "png");
            $ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
            var_dump($ext);

            if(empty($image_name) and empty($image_tmp)  or ! in_array($ext, $valid_extensions)) {
                $formErrors["image"]="please enter a valid image";
                $errors = json_encode($formErrors);
                $queryString ="errors={$errors}";
                $old_data = json_encode($oldData);
                if($old_data){
                    $queryString .= "&old={$old_data}";
                }
                header("location:../app/register.php?{$queryString}");
            }else{
                $image_name = explode("/", $image_tmp);
                $image_name = end($image_name).".".$ext;
                var_dump($image_name);

                $uploaded=move_uploaded_file($image_tmp, "../uploads/" . $image_name);
                $imagePath = "../uploads/" . $image_name;
            }
        
         
            $id = addID();

            $info = "{$id}:{$name}:{$email}:{$password}:{$room}:{$ext}:{$imagePath}\n";

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
            <img src="<?php echo $imagePath; ?>" alt="Uploaded Image" />

            
        </div>
    </div>
</div>

</body>
