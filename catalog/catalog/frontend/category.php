<html>
    <head>
        <title>Product Form</title>
    </head>
    <body>
        <center>
            <h1>Product Entry Form</h1>
            <br>
        <?php
            include('../sql/connection.php');
            include('../sql/functions.php');
            $id = $_REQUEST['cat_id'];
            $where = array('cat_id'=>$id);
            $object_query = new query_builder();
            $sql = $object_query->select("ccc_category",$where);
            $object_execution = new query_execution();
            $data = $object_execution->select_execution($sql,$conn);
            // $sql = select("ccc_category",$where);
            // //echo $sql;
            // $data = mysqli_query($conn,$sql);
            while($record = mysqli_fetch_assoc($data))
            {
        ?>
        <form name="pro_form" action="../backend/category_update.php" method="post">
        <table>
            <tr>
                
                <td><input type="hidden" name="category[cat_id]" id="cat_id" value="<?php echo $record["cat_id"]?>" required/></td>
            </tr>
            <tr>
                <td>*Enter Category Name </td>
                <td>&nbsp;&nbsp;&nbsp;</td>
                <td><input type="text" name="category[name]" id="name" value="<?php echo $record["name"]?>" required/></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" id="submit"></td>
                <td>&nbsp;&nbsp;&nbsp;</td>
                <td><input type="reset" name="reset" id="reset"></td>
            </tr>
        </table>
    </form>
    <?php
            }
            ?>
    </center>
    </body>
</html>