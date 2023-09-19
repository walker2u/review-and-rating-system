<?php

function average_rating(){

    require 'db.php';
    $query = "select avg(user_rating) from review_table";
    $average = $con->query($query);
    $avg = mysqli_fetch_array($average);
    $avg = round($avg[0],1);
    return $avg;
}