<?php
$category = $_POST['category'];
$con = mysqli_connect('localhost', 'root', '', 'digital_animation_task');
$query1 = "select * from tbl_category where category='$category'";
$res1 = mysqli_query($con, $query1);
if ($row = mysqli_fetch_assoc($res1) > 0) {
    echo "<script>alert('Category already exist.');window.location.href='addcat';</script>";
} else {
    $query = "insert into tbl_category(category,status,date) values('$category','Y',now()) ";
    $res = mysqli_query($con, $query);
    echo "<script>alert('Category Successfully.');window.location.href='addcat';</script>";
}
