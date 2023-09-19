<?php
function showReview(){

    require 'db.php';
    $query = "select * from review_table";
    $result = $con->query($query);
    return $result;
}