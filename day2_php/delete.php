<?php
    require_once "utils.php";
    require_once "helpers.php";

    $idToDelete = $_GET['id'];
    $filename = "customers.txt";

    $fileContent= file_get_contents("customers.txt");
    $lines = explode("\n", trim($fileContent));

    $updatedLines = [];

    $lastId=0;

    foreach ($lines as $line) {
        $data = explode(":", $line);
        if ($data[0] != $idToDelete) { 
            $updatedLines[] = $line."\n";
            $lastID=$data[0];
        }
    }
    setLastID($lastID);
    file_put_contents($filename,$updatedLines);

    header("Location:customerRetrieval.php");

    exit();
?>
