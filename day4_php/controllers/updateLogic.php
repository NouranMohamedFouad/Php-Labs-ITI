<?php

    require_once "../includes/utils.php";
    require_once "../validations/validate.php";
    require_once "../mysqli/databaseOperations.php";


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
            $id = $_POST['id'];


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

                $uploaded=move_uploaded_file($image_tmp, "../uploads/" . $image_name);
                $imagePath = "../uploads/" . $image_name;
            }

            $id = update($id,$name,$email,$password,$room,$ext,$imagePath,$oldData);
    
            if($id) {
                header("location:../app/usersRetrieval.php");
            }else{
                echo '<h1 class="mt-5 fw-bold text-danger">Contact Support</h1>';
            }      
}

?>
