<?php
session_start();
if (isset($_SESSION['user'])) {

    $proid = $_POST['proid'];
    $productname = $_POST['productname'];
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $cp = $_POST['cp'];
    include('./condb.php');
    $query = "UPDATE `tbl_product` SET`productname`='$productname',`image`='$image',`cp`='$cp' where `proid`='$proid' ";
    $res = mysqli_query($con, $query);
    if ($res) {
        move_uploaded_file($image_tmp, "upload/$image");
        header('location:addproduct');
    } else {
        header('location:addproduct');
    }
} else {
    header('location:index');
}
