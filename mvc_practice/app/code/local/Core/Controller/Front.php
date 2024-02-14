<?php

class Core_Controller_Front
{
    public function init()
    {
        $request=Mage::getModel("core/request");
        //$request = new Core_Model_Request();
        $actionName = $request->getActionName()."Action";
        $controllerName = $request->getfullControllerName();
        // echo $controllerName;
        $controllerObject = new $controllerName();
        $controllerObject->$actionName();
    }
}

?>