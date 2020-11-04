<?php
$servername = "localhost";
$username =  "root";
$password = "";
$database = "supereletro";

$connect = mysqli_connect($servername, $username, $password, $database);

if(!$connect) {
    die("A conexão falhou".mysqli_connect_error())
    ;
}
?>
