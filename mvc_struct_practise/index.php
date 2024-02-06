<?php
    include "Lib/autoload.php";
    
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
    //echo "123";die;
    // $request=new Model_Request();

    // if(!$request->isPost())
    // {
    //     $product=new View_Product();
    //     echo $product->toHtml();
    // }
    // else
    // {
    //     $product=new Model_Product();
    //     $product->save($request->getParams('pdata'));
    // }
?>