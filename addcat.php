<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>
</head>
<body>
    <form action="addcatlog.php" method="post">
        Category :
        <input type="text" name="category" >
        <br/><br/>
        <input type="submit" value="Add" name="add">
    </form>
</body>
</html> -->


<?php
session_start();
if (isset($_SESSION['user'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Add Category</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <h2>Add Category</h2>
        <form method="post" action="addcatcode.php">
            Category Name :
            <input type="text" name="category">
            <br><br>
            <input type="submit" value="Add" name="ok">
        </form>
        
        <br>
        <a href="profile.php">Back</a>
        <br><br>
        <h2>All Category</h2>
        <table border="1">
            <tr>
                <th>S.no.</th>
                <th>Category</th>
                <th>Date & Time</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php
            $con = mysqli_connect('localhost', 'root', '', 'digital_animation_task');
            $query = "select * from tbl_category";
            $res = mysqli_query($con, $query);
            $a = 1;
            while ($row = mysqli_fetch_assoc($res)) {
            ?>
                <tr>
                    <td><?php echo $a; ?></td>
                    <td><?php echo $row['category']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><a href="catedit?catid=<?php echo $row['catid']; ?>">Edit</a></td>
                    <td><a href="deletecatcode?catid=<?php echo $row['catid']; ?>">Delete</a></td>
                </tr>
            <?php
                $a++;
            }
            ?>
        </table>
    </body>

    </html>
<?php
} else {
    header('location:index.php');
}
?>