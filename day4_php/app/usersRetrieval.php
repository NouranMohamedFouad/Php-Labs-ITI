<?php
    require_once "../includes/utils.php";
    require_once "../helpers/drawTable.php";
    require_once "../mysqli/databaseOperations.php";


    $table  =[];
    $table=selectData();
    if ($table) {
    
        echo '<h1 class="text-center mt-5 fw-bold text-primary">Users Records</h1>';
        $headers = ["ID", "Name","Email","Password","Room no.","Extension","Image Path"];
        drawTable($headers, $table);
    }
    else{
        echo '<body style="background-color: rgb(32, 30, 30);"><h1 class="text-center mt-5 fw-bold text-primary">No Records Found !</h1> </body>';
    }
    
?>