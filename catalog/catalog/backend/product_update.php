<?php

include('../sql/connection.php');
include('../sql/functions.php');

$data = $_POST['product'];
//print_r($data);
$id = array('pro_id'=>$data["pro_id"]);
$object_query = new query_builder();
$sql = $object_query->update("tbl_ccc_product",$data,$id);
$object_execution = new query_execution();
$output = $object_execution->execution($sql,$conn);
//print_r($id);
// $sql = update("tbl_ccc_product",$data,$id);
//echo $sql;
if($output == true) 
{
    echo '<script type="text/javascript">alert("Record Updated")</script>';
    return header("Location: ../frontend/product_list.php");
}
else 
{
    echo "Error updating record: " . mysqli_error($conn);
}
?>