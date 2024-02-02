<?php

include('../sql/connection.php');
include('../sql/functions.php');

$data = $_POST['category'];
//print_r($data);
$id = array('cat_id'=>$data["cat_id"]);
//print_r($id);
$object_query = new query_builder();
$sql = $object_query->update("ccc_category",$data,$id);
$object_execution = new query_execution();
$output = $object_execution->execution($sql,$conn);
// $sql = update("ccc_category",$data,$id);
//echo $sql;
if($output == true) 
{
    echo '<script type="text/javascript">alert("Record Updated")</script>';
    return header("Location: ../frontend/category_list.php");
}
else 
{
    echo "Error updating record: " . mysqli_error($conn);
}
?>