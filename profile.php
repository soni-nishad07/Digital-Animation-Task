
<?php
session_start();
echo 'Welcome to Profile<br/>';
if($_SESSION['user']==''){
    session_destroy();
    header("location:login.php");
}
echo $_SESSION['user'];
?>

<br><br/>
<a href="logout">Logout</a><br><br>
<a href="addcat">Add Category</a><br/><br/>
<a href="addproduct">Add Product</a>


