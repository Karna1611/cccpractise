<?php
    class Controller_front
    {
        public function init()
        {
            //echo "1,2,3";
            $req=new Model_Request();
            $str= $req->getRequestUri();
            // echo $str;
            $className=trim("View_".ucwords(trim(str_replace("/","_",$str),'_')));
            $className=ucwords($className);
            // echo $className;
            $LayoutClass=new $className;
            return $LayoutClass->toHtml();
        }
    }
?>  