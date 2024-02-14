<?php

class Core_Controller_Front
{

    public function init()
    {
        //$coreModelRequest = new Core_Model_Request();
        $coreModelRequest=Mage::getModel("core/request");
        //echo get_class($coreModelRequest);die;
        //echo $moduleName = $coreModelRequest->getModuleName();
        $actionName = $coreModelRequest->getActionName().'Action';
        //var_dump($actionName);
        $fullClassName = $coreModelRequest->getFullControllerClass();
        //echo $fullClassName;die;
        $controller = new $fullClassName();
        $controller->$actionName();
        //$actionName .= 'Action';
        //echo $controllerName = $coreModelRequest->getControllerName();
         
        
        
        
        
        
        // echo get_class($fullClassObj);\
        //$fullClassObj->$actionName();


    }
}