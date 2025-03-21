<?php
    require_once "utils.php";
    require_once "helpers.php";

    $lines = file("customers.txt");
    $table  =[];
    if ($lines) {
        foreach ($lines as $line) {
            $line = trim($line); 
            $line = explode(":", $line); 
            $id = $line[0]; 
            $line[] = "<a href='delete.php?id={$id}' class='btn btn-danger btn-sm'>Delete</a>"; 
            $table[] = $line;
        }
    }
    echo '<h1 class="text-center mt-5 fw-bold text-primary">🎉 Customers Records 🎉</h1>';

    $headers = ["ID", "Full Name", "Email", "Address","Country","Gender","Skills","Username","Password","Department","Action"];

    drawTable($headers, $table);
?>



