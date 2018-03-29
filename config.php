<?php
session_start();
$conn = mysqli_connect('localhost', 'root','user123','egzaminas');
if(!$conn){
    die("Failed to connect to database : " . mysqli_connect_error());
}

define('ROOT_PATH', realpath(dirname(__FILE__)));
define('BASE_URL','http://192.168.1.135/egzaminas/');