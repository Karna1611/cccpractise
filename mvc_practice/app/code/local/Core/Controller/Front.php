<?php

class Core_Controller_Front
{
    public function init()
    {
        $requestModel=Mage::getModel("core/request");
        //$request = new Core_Model_Request();
        $actionName = $requestModel->getActionName()."Action";
        $fullClassName = $requestModel->getFullControllerName();
        // echo $controllerName;
        $Layout = new $fullClassName();
        //echo get_class($Layout);
        //print_r($Layout);
        $Layout->$actionName();
    }
}

?>