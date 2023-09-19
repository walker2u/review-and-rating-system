<?php

$host = "localhost";
$username = "root";
$pass = "";
$db = "testing";

$con = new mysqli($host,$username,$pass,$db);
if($con->connect_error){
    die("Connection Error!");
}