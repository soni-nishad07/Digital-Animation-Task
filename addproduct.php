<?php
session_start();
if (isset($_SESSION['user'])) {
    error_reporting(0);
    $msg = $_GET['msg'];
    if ($msg == 1) {
        $m1 = "Product Added Successfully.";
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Product</title>
    </head>

    <body>
        <h2>Add Product</h2>
        <?php
        include('./condb.php');
        $query = "select * from tbl_category";
        $res = mysqli_query($con, $query);
        ?>
        <form action="addprocode.php" method="post" enctype="multipart/form-data">
            Select Category :
            <select name="catid">
                <option value="">--Select Category--</option>
                <?php
                while ($row = mysqli_fetch_assoc($res)) {
                ?>
                    <option value="<?php echo $row['catid'] ?>"><?php echo $row['category'] ?></option>
                <?php
                }
                ?>
            </select>
            <br><br>
            Enter product name :
            <input type="text" name="productname">
            <br><br>
            Upload image :
            <input type="file" name="image">
            <br><br>
            Enter Cost Price :
            <input type="number" name="cp">
            <br><br>
            <input type="submit" value="Add Product" name="ok">
        </form>
        <span style="color:green;"><?php echo $m1 ?></span>
        <br><br>
        <a href="profile.php">Back</a>
        <h2>All Products</h2>
        <table border=1>
            <tr>
                <th>S.no.</th>
                <th>Name</th>
                <th>Image</th>
                <th>Cost Price</th>
                <th>Date & Time</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php
            include('./condb.php');
            $query = "select * from tbl_product";
            $res = mysqli_query($con, $query);
            $a = 1;
            while ($row = mysqli_fetch_assoc($res)) {
            ?>
                <tr>
                    <td><?php echo $a ?></td>
                    <td><?php echo $row['productname'] ?></td>
                    <td><img src="upload/<?php echo $row['image'] ?>" alt="" height="100" width="100"></td>
                    <td><?php echo $row['cp'] ?></td>
                    <td><?php echo $row['date'] ?></td>
                    <td><a href="editproduct.php?proid=<?php echo $row['proid'] ?>">Edit</a></td>
                    <td><a href="deleteproduct.php?proid=<?php echo $row['proid'] ?>">Delete</a></td>
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