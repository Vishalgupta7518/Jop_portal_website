<?php
$host = "localhost";
$root = "root";
$pass = "";
$database = "curryon";

$mysqli = new Mysqli($host,$root,$pass,$database);

if($mysqli->errno){
    echo "Connection failed".$mysqli->connet_error;
    die;

}


?>