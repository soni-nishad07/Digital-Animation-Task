<?php
session_start();
if (isset($_SESSION['user'])) {
    $catid = $_GET['catid'];
    $con = mysqli_connect('localhost', 'root', '', 'digital_animation_task');
    $query = "delete from tbl_category where catid='$catid'";
    $res = mysqli_query($con, $query);
    header('location:addcat');
} else {
    header('location:addcat');
}
