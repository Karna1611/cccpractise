<?php

class Page_Controller_Index extends Core_Controller_Front_Action
{
    public function indexAction()
    {
        //echo '<pre>';
        //echo "123";
        $layout=$this->getLayout();
        $layout->toHtml();
        //var_dump ($layout);
        // print_r($layout);die;
        //echo dirname(__FILE__);
        // echo "Index Action";
    }
    public function testAction()
    {
        echo "123";
        //$layout=$this->getLayout();
    }    
    public function saveAction()
    {
        echo "Save Data";
    }
}