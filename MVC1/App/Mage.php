<?php
class Mage
{
    public static function init()
    {
        $requestModel=Mage::getModel("core/request");
        echo $requestModel->getRequestUri();
        //echo get_class($requestModel); 

    }
    public static function getModel($modelName)
    {
        $args=str_replace("/","_Model_", $modelName);
        $url=ucwords($args);
        return new $url();
    }
}