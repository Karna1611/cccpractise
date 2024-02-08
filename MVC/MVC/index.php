<?php
include 'Lib/autoload.php';

class Ccc
{
    public static function init()
    {
        //echo "1,2,3";
        $req=new Controller_front();
        $text= $req->init();

        echo($text);

        // $front=new Controller_Front();

    }
}
Ccc::init();


// $request=new Model_Request();
// $action=$request->getQueryData('action');
// $id= $request->getQueryData('product_id');
// if(!$request->isPost() && $action==null){
//     $product=new View_Product();
//     echo $product->toHtml(); 
// }
// if($action=='add' && $id==0){
//     if(!$request->isPost()){
//         $product=new View_Product();
//         echo $product->toHtml();
//     }
//     else{
//         $product=new Model_Product();
//         $result=$product->add($request->getParams('pdata'));
//         if($result){
//             echo "<script>alert('Data inserted succefully')</script>";
//             echo "<script>location.href='index.php'</script>";
//         }
//         else{
//             echo "<script>alert('Error in data inserting')</script>";
//         }
        
//     }
// }
// elseif($action=='edit'){
//     if(!$request->isPost()){
//         $product=new View_Product();
//         echo $product->toHtml();
//     }
//     else{
//         $product=new Model_Product();
//         $result=$product->upd($request->getParams('pdata'),['product_id'=>$id]);
//         if($result){
//             echo "<script>alert('Data updated succefully')</script>";
//             echo "<script>location.href='index.php'</script>";
//         }
//         else{
//             echo "<script>alert('Error in data updating')</script>";
//         }
        
//     }
// }
// elseif($action=='delete'){
//     $product=new Model_Product();
//     $result=$product->dlt(['product_id'=>$id]);
//     if($result){
//         echo "<script>alert('Data deleted succefully')</script>";
//         echo "<script>location.href='index.php'</script>";
//     }
//     else{
//         echo "<script>alert('Error in data deleting')</script>";
//     }        
// }
?>