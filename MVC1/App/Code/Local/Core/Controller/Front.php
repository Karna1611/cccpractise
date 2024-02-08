<?php
class Core_Controller_Front
{
    public function init()
    {
        $modelObj=Mage::getModel("core/request");
        $modelObj->getControllerName();
        $modelObj->getRequestUri();   
        

        $ControllerIndexObj=Mage::getModel("Core/Page/Controller/Index");
        $action=$ControllerIndexObj->getActionName();
        $ControllerIndexObj->$action."Action";
    }
    //$controller=new Core_Controller_Front();
}