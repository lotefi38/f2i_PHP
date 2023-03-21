<?php
require("database.php");

$array = [];
function verif ($name, $min, $max, $message, $array){
    if (strlen($name) < $min|| strlen($name) > $max) {
        array_push($array,message);
        return $array;
    }
    
}
$db = new Database();
$db->connectDB();