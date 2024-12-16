<?php
include "condb.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Admin Login</h2>
    <form action="logcode.php" method="post">
        <input type="email" name="email" id="" placeholder="Enter your email">
        <br/><br/>
        <input type="password" name="password" id="" placeholder="Enter your password">
        <br/><br/>
        <input type="submit" value="Login" name="submit">
        <br/><br/>
        <a href="forget">Forget Password</a>
    </form>
</body>
</html>