<?php

include('../sql/connection.php');
include('../sql/functions.php');

$data = $_POST['category'];
//print_r($data);

$sql = insert("ccc_category",$data);


if(mysqli_query($conn,$sql))
{
    echo '<script type="text/javascript">alert("Record Inserted")</script>';
    return header("Location: ../frontend/category_list.php");
}
else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>