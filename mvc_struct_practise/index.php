<?php
    include "Lib/autoload.php";
    //echo "123";die;
    $request=new Model_Request();

    if(!$request->isPost())
    {
        $product=new View_Product();
        echo $product->toHtml();
    }
    else
    {
        $product=new Model_Product();
        $product->save($request->getParams('pdata'));
    }
?>