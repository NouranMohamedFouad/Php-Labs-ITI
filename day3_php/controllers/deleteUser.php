<?php
    require_once "../includes/utils.php";
    require_once "../helpers/idHandlation.php";

    $idToDelete = $_GET['id'];
    $fileContent= file_get_contents("../data/users.txt");
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
    file_put_contents("../data/users.txt",$updatedLines);

    header("Location:../app/usersRetrieval.php");
?>
