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
            $table[] = $line;
        }
    }
    echo '<h1 class="text-center mt-5 fw-bold text-primary">Users Records</h1>';

    $headers = ["ID", "Name","Email","Password","Room no.","Extension"];

    drawTable($headers, $table);
?>