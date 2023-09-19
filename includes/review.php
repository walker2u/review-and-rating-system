<?php
require 'db.php';

if($_SERVER['REQUEST_METHOD']=='POST'){

    $name = $_POST['name'];
    $review = $_POST['review'];
    $user_rating = 3;

    $query = "insert into review_table(user_name,user_rating,user_review) value(?,?,?)";
    $stmt = $con->prepare($query);
    $stmt->bind_param("sis",$name,$user_rating,$review);
    $stmt->execute();
    header('Locayion:index.php');
}
else{
    header('Location:../index.php');
    die();
}