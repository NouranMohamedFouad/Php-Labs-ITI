<?php
    require_once "../includes/utils.php";
    require_once "../mysqli/databaseOperations.php";


    $idToDelete = $_POST['id'];
    $isDeleted=delete($idToDelete);
    header("Location:../app/usersRetrieval.php");
?>
