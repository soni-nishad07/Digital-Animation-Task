<?php
session_start();
if (isset($_SESSION['user'])) {
    $catid = $_POST['catid'];
    $productname = $_POST['productname'];
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $cp = $_POST['cp'];
    // $date=$_POST['date'];
    include('./condb.php');
    $query = "INSERT INTO `tbl_product`(`catid`, `productname`, `image`,  `cp`, `status`, `date`) VALUES ('$catid','$productname','$image','$cp','Y',now())";
    $res = mysqli_query($con, $query);
    if ($res) {
        move_uploaded_file($image_tmp, "upload/$image");
        header('location:addproduct?msg=1');
    } else {
        header('location:addproduct');
    }
} else {
    header('location:index');
}
