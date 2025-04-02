<?php

function conexion(){

$host = "host=dpg-cvmpjdmmcj7s73bqu8h0-a.oregon-postgres.render.com";
$port = "port=5432";
$dbname = "dbname=test_8318";
$user = "user=eloy";
$password = "password=pdN7oJ0F8j1mPrgUGBnodiRidOkK0u9a";

$db = pg_connect("$host $port $dbname $user $password");

return $db;
}
?>