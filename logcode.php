
<?php
session_start();
include "condb.php";

?>
<?php
$email = $_POST['email'];
$password = $_POST['password'];
// $pass = md5($password);

$query = "select * from admin_login";

$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
if ($row['email'] == $email && $row['password'] == $password) {
    $_SESSION['user'] = $email;
    header("location:profile");
}else{
    header("location:index?msg=1");
}