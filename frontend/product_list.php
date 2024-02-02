<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <table border="2px">
        <tr>
            <th>Product Name</th>
            <th>pro_sku</th>
            <th>pro_category</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
            include('../sql/connection.php');
            include('../sql/functions.php');
            $object_query = new query_builder();
            $sql = $object_query->select("tbl_ccc_product",null,null);
            $object_execution = new query_execution();
            $data = $object_execution->select_execution($sql,$conn);
            // $data = mysqli_query($conn,$sql);
            while($record = mysqli_fetch_assoc($data))
            {?>
                <tr>
                    <td><?php echo $record["pro_name"] ?></td>
                    <td><?php echo $record["pro_sku"] ?></td>
                    <td><?php echo $record["pro_category"] ?></td>
                    <td><a href="../frontend/product.php?pro_id= <?php  echo $record["pro_id"]; ?>">Update</a></td>
                    <td><a href="../backend/product_delete.php?pro_id= <?php  echo $record["pro_id"]; ?>">Delete</a></td>
                </tr>
            <?php
            }
        ?>
    </table>
    <a href="product.php?pro_id=0">Add Product</a>
</body>
</html>