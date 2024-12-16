<?php
session_start();
if (isset($_SESSION['user'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Edit Category</title>
    </head>

    <body>
        <?php
                include('./condb.php');
        // $con = mysqli_connect('localhost', 'root', '', 'digital_animation_task');
        $catid = $_GET['catid'];
        $query = "select * from tbl_category";
        $res = mysqli_query($con, $query);
        if ($row = mysqli_fetch_assoc($res)) {
        ?>
            <h2>Edit Category Name</h2>
            <form action="editcatcode.php" method="post">
                Enter Name:
                <input type="text" name="category" value="<?php echo $row['category'] ?> ">
                <br><br>
                <input type="submit" value="Save" name="ok">
            </form>
        <?php
        }
        ?>
    </body>

    </html>
<?php
} else {
    header('location:index');
}
?>