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

        // $request = new Model_Request;
        // $requestUri = $request->getRequestUri();
        // $requestUri = "View/" . ucwords(str_replace('/practice/mvc_practice/',  '', $requestUri), "/");
        // $className = str_replace("/", "_", $requestUri);
        // $layout = new $className();
        // // echo $className;
        // return $layout->toHtml();
         
        }
    }
