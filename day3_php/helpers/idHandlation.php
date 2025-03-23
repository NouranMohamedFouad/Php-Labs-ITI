<?php

function addID(){
    if(file_exists("../data/id.txt")){
        $id=  file_get_contents("../data/id.txt");
        $id = (int)$id + 1;
    }else{
        $id=1 ;
    }
    file_put_contents("../data/id.txt", $id);
    return $id;
}

function setLastID($id){
    file_put_contents("../data/id.txt", $id);
    return $id;
}




?>