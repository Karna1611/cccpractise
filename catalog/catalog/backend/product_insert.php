<?php

include('../sql/connection.php');
include('../sql/functions.php');

$data = $_POST['product'];
//print_r($data);
$object_query = new query_builder();
$sql = $object_query->insert("tbl_ccc_product",$data);
$object_execution = new query_execution();
$output = $object_execution->execution($sql,$conn);
if($output == true)
{
    echo '<script type="text/javascript">alert("Record Inserted")</script>';
    return header("Location: ../frontend/product_list.php");
}
else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// if(mysqli_query($conn,$sql))
// {
//     echo '<script type="text/javascript">alert("Record Inserted")</script>';
//     return header("Location: ../frontend/product_list.php");
// }
// else
// {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }
?>