<?php
    include('./condb.php');

 $catid = $_POST['catid'];
$category = $_POST['category'];
    $query = "UPDATE `tbl_category` SET`category`='$category',`date`= NOW() WHERE `catid`='$catid' ";
    $res = mysqli_query($con, $query);
    echo "<script>alert('Category Successfully.');window.location.href='addcat';</script>";

?>