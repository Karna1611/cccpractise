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
            <th>Category Name</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
            include('../sql/connection.php');
            include('../sql/functions.php');
            $object_query = new query_builder();
            $sql = $object_query->select("ccc_category",null);
            $object_execution = new query_execution();
            $data = $object_execution->select_execution($sql,$conn);
            // $sql = select("ccc_category",null);
            // $data = mysqli_query($conn,$sql);
            while($record = mysqli_fetch_assoc($data))
            {?>
                <tr>
                    <td><?php echo $record["name"] ?></td>
                    <td><a href="../frontend/category.php?cat_id= <?php  echo $record["cat_id"]; ?>">Update</a></td>
                    <td><a href="../backend/category_delete.php?cat_id= <?php  echo $record["cat_id"]; ?>">Delete</a></td>
                </tr>
            <?php
            }
        ?>
    </table>
    <!-- <a href="category.php">Add Product</a> -->
</body>
</html>