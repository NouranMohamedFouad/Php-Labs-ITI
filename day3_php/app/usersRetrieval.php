<?php
    require_once "../includes/utils.php";
    require_once "../helpers/drawTable.php";

    $lines = file("../data/users.txt");
    $table  =[];
    if ($lines) {
        foreach ($lines as $line) {
            $line = trim($line); 
            $line = explode(":", $line); 
            $id = $line[0]; 
            $line[] = "<a href='../controllers/deleteUser.php?id={$id}' class='btn btn-danger btn-sm'>Delete</a>"; 
            $table[] = $line;
        }

        echo '<h1 class="text-center mt-5 fw-bold text-primary">Users Records</h1>';

        $headers = ["ID", "Name","Email","Password","Room no.","Extension","Image Path","Action"];

        drawTable($headers, $table);
    }
    else{
        echo '<body style="background-color: rgb(32, 30, 30);"><h1 class="text-center mt-5 fw-bold text-primary">No Records Found !</h1> </body>';


    }
    
?>