<?php
session_start();
if (isset($_SESSION['user'])) {
    $proid = $_GET['proid'];
    $con = mysqli_connect('localhost', 'root', '', 'digital_animation_task');
    $query = "delete from tbl_product where proid='$proid'";
    $res = mysqli_query($con, $query);
    header('location:addproduct.php');
} else {
    header('location:addproduct.php');
}
