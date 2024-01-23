<?php
    $host="localhost";
    $dbname="login_db";
    $username="root";
    $password="";

    $connection=mysqli_connect($host,$username,$password,$dbname);

    if(mysqli_connect_errno())
    {
        echo("Failed");
        exit();
    }
    else{
        echo "Success";
    }
    
    // {
    //     die("SKU must be atleast 15 characters");
    // }    
    // if(! preg_match("/[A-Z]/i",$_POST["name"]))
    // {
    //     die("Product name must contain atleast one letter");
    // }
    // if(! preg_match("/[0-9]/i",$_POST["name"]))
    // {
    //     die("Product name must contain atleast one letter");
    // }
    if(isset($_POST["Submit"])) 
    {
    $name=$_POST["name"];
    $sku=$_POST["SKU"];
    $producttype=$_POST["producttype"];
    $category=$_POST["category"];
    $manucost=$_POST["manucost"];
    $shipcost=$_POST["shipcost"];
    $totalcost=$_POST["totalcost"];
    $price=$_POST["price"];
    $Status=$_POST["Status"];
    $cdate=$_POST["cdate"];
    $udate=$_POST["udate"];

  

    $sql="INSERT INTO ccc_product VALUES('$name','$sku','$producttype','$category','$manucost','$shipcost','$totalcost','$price','$Status','$cdate','$udate')";
    mysqli_query($connection,$sql);
}
?>