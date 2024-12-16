<?php
session_start();
if (isset($_SESSION['user'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Product</title>
    </head>

    <body>
        <h2>Edit Product</h2>
        <?php
        include('./condb.php');
        $proid = $_GET['proid'];
        $query = "select * from tbl_product where proid='$proid'";
        $res = mysqli_query($con, $query);
        ?>
        <form action="editproductcode.php" method="post" enctype="multipart/form-data">
            <?php
            if ($row = mysqli_fetch_assoc($res)) {
            ?>
                <br><br>
                Enter product name :
                <input type="text" name="productname" value="<?php echo $row['productname'] ?>">
                <br><br>
                Upload image :
                <input type="file" name="image">
                <br><br>
                Enter Cost Price :
                <input type="number" name="cp" value="<?php echo $row['cp'] ?>">
                <br><br>
                <input type="hidden" name="proid" value="<?php echo $row['proid'] ?>">
                <input type="submit" value="Update" name="ok">
            <?php
            }
            ?>
        </form>
        <br><br>
        <a href="addproduct.php">Back</a>
        </table>
    </body>

    </html>
<?php
} else {
    header('location:index.php');
}
?>