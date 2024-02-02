<?php

include('../sql/connection.php');
include('../sql/functions.php');
$id = $_REQUEST["cat_id"];
$where = array('cat_id'=>$id);

$object_query = new query_builder();
$sql = $object_query->delete("ccc_category",$where);
$object_execution = new query_execution();
$output = $object_execution->execution($sql,$conn);
// $sql = delete("ccc_category",$where);
// echo $sql;

if($output == true)
{
    echo '<script type="text/javascript">alert("Record Deleted")</script>';
    return header("Location: ../frontend/category_list.php");
}
else{ 
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link); 
} 

?>