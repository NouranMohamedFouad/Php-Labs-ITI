<?php

function validatePostData($postData){
    $errors = [];
    $valid_data = [];
    foreach ($postData as $key => $value) {
        if(! isset($value) or empty($value)){
            $errors[$key] = ucfirst("{$key} is required");
        }
        else if($key == "email" && !validateEmail2($value)){
            $errors["email"] = "Invalid email";
        }
        else if($key == "password" && !validatePassword($value)){
            $errors["password"] = "Invalid Password";
        }
        else{
            if (is_array($value)) {
                $valid_data[$key] = array_map('trim', $value);
            } else {
                $valid_data[$key] = trim($value);
            }

            
        }
    }

    return ["errors" => $errors, "valid_data" => $valid_data];
}


function validateEmail($email){
    if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }
    return true;
}

function validateEmail2($email){
    return preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email);
}

function validatePassword($password){
    return preg_match("/^[a-z0-9_]{8}$/", $password);
}

function isExist($userEmail,$userPassword){
    $lines = file("../data/users.txt");
    if ($lines) {
        foreach ($lines as $line) {
            $line = trim($line); 
            $line = explode(":", $line); 
            $email = $line[2]; 
            $pass= $line[3];
            if($email == $userEmail and $pass == $userPassword){
                return true;
            }
        }
    }
    return false;
}


function isPasswordMatch($pass,$confirmPass){
    if($pass == $confirmPass){
        return true;
    }
    return false;
}

?>