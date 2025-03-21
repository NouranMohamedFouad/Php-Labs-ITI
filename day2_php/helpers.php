<?php


function drawTable($header, $tableData) {

    echo '<div class="table-responsive">
        <table class="table table-hover table-bordered align-middle w-100">
            <thead class="table-dark">
            <tr>';
    foreach ($header as $value) {
        echo "<th>$value</th>";
    }
    echo "</tr></thead><tbody>";

    foreach ($tableData as $row) {
        echo "<tr>";
        foreach ($row as  $field) {
            echo "<td>{$field}</td>";
        }
        echo "</tr>";
    }

    echo "</tbody></table></div> </div>";

}


function addID(){
    if(file_exists("id.txt")){
        $id=  file_get_contents("id.txt");
        $id = (int)$id + 1;
    }else{
        $id=1 ;
    }
    file_put_contents("id.txt", $id);
    return $id;
}


function appendDataTofile($filename, $data){
    $fileobject= fopen($filename, "a");
    if ($fileobject) {
        fwrite($fileobject, $data);
        fclose($fileobject);
        return true;
    }
    return false;
}

function validatePostData($postData){
    $errors = [];
    $valid_data = [];
    foreach ($postData as $key => $value) {
        if(! isset($value) or empty($value)){
            $errors[$key] = ucfirst("{$key} is required");
        }else{
            if (is_array($value)) {
                $valid_data[$key] = array_map('trim', $value);
            } else {
                $valid_data[$key] = trim($value);
            }
        }
    }
    return ["errors" => $errors, "valid_data" => $valid_data];
}

function setLastID($id){
    file_put_contents("id.txt", $id);
    return $id;
}

