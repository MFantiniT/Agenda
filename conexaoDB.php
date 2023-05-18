<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$dbName = "agenda";


$conexaoDB = new PDO("mysql:host=$host;dbname=$dbName", $usuario, $senha);