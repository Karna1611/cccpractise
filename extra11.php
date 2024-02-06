<?php
class Temp
{
    public $sum=0,$var;
    public function sum()
    {
        $arr=array(3,5,7,1,9);
        sort($arr);
        print_r($arr);
        echo "<br>";
        array_pop($arr);
        print_r($arr);
        echo "<br>";
        echo array_sum($arr);

        $arr=array(3,5,7,1,9);
        sort($arr);
        array_shift($arr);
        echo "<br>";
        print_r($arr);
        echo "<br>";
        echo array_sum($arr);
    }

}
$obj=new Temp();
$obj->sum();
?>

Root Folder
    /app/code/local
            /Product/
                /Model
                /Controller
                /View
            /Customer
                /Model
                /Controller
                /View
        /design/frontend/tempalte/
            /product
                /form.phtml
                /list.phtml
                /grid.phtml
            /customer/
                /form.phtml
                /list.phtml
                /address/
                    form.phtml

URL: <localhost>
<myfolderrootdirectory> product/index/new</myfolderrootdirectory>
<myfolderrootdirectory> product/index/list</myfolderrootdirectory>
<myfolderrootdirectory> product/index/save</myfolderrootdirectory>
<myfolderrootdirectory> product/index/delete</myfolderrootdirectory>

<myfolderrootdirectory> customer/index/new</myfolderrootdirectory>
<myfolderrootdirectory> customer/index/list</myfolderrootdirectory>
<myfolderrootdirectory> customer/index/save</myfolderrootdirectory>
<myfolderrootdirectory> customer/index/delete</myfolderrootdirectory>

<myfolderrootdirectory> customer/address/new</myfolderrootdirectory>
<myfolderrootdirectory> customer/address/list</myfolderrootdirectory>
<myfolderrootdirectory> customer/address/save</myfolderrootdirectory>
<myfolderrootdirectory> customer/address/delete</myfolderrootdirectory>

<myfolderrootdirectory> customer/quote_address/new</myfolderrootdirectory>
<myfolderrootdirectory> customer/address/list</myfolderrootdirectory>
<myfolderrootdirectory> customer/address/save</myfolderrootdirectory>
<myfolderrootdirectory> customer/address/delete</myfolderrootdirectory>

