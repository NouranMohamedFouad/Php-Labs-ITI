<?php

    require_once "../validations/validate.php";

    session_start();
    $errors = array();

    $formDataIssues = validatePostData($_POST);
    $formErrors = $formDataIssues["errors"];

    if(count($formErrors)) {
        $errors = json_encode($formErrors);
        $queryString ="errors={$errors}";
        header("location:../app/login.php?{$queryString}");
    }
    else{
        $email = $_POST["email"];
        $password = $_POST["password"];

        if(isExist($email,$password)){
            $_SESSION['email'] = $email;
            $_SESSION['login']= true;

            header('Location:../app/home.php');
        }
        else{
            header("location:../app/login.php?notfound=true");
        }
    }