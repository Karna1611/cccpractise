<?php


class Mage
{
    public static $baseDir = 'C:/xampp/htdocs/cybercom_prac/mvc_practice';
    public static $baseUrl='http://localhost/cybercom_prac/mvc_practice';
    private static $_singleTon=null; 
    public static function init()
    {
        $frontObject = new Core_Controller_Front();
        $frontObject->init();
    }

    public static function getModel($modelName)
    {
        $uriArray = explode("/", $modelName);
        $className = ucfirst($uriArray[0])."_"."Model"."_".ucfirst($uriArray[1]);
        // echo $className;
        return new $className;
       
    }

    public static function getBlock($blockName)
    {
        $uriArray = explode("/", $blockName);
        $className = ucfirst($uriArray[0])."_"."Block"."_".ucfirst($uriArray[1]);
        return new $className;
    }

    public static function getSingleton($className)
    {
        if(isset(self::$_singleTon[$className]))
        {
            return  self::$_singleTon[$className]; 
        }
        else
        {

            return self::$_singleTon[$className] = self::getModel($className); 
        }

    }

    public static function register($key, $value)
    {

    }

    public static function registry($key)
    {

    }
    public static function getBaseDir($subDir = null)
    {
        if($subDir)
        {
            return self::$baseDir . '/' . $subDir;
        }
        return self::$baseDir;
    }
    public static function getBaseUrl($subUrl=null)
    {
        if($subUrl)
        {
            return self::$baseUrl .'/'. $subUrl;
        }
        return self::$baseUrl.'/';
    }
    // public static function getMediaUrl($subUrl=null){
    //     if($subUrl){
    //         return self::$baseUrl.'/media/'.$subUrl;
    //     }
    //     return self::$baseUrl;
    // }

    public static function getImagePath($filePath){
        if($filePath){
           return self::$baseUrl.'/media/' . $filePath;
        }
        
     }
}


?>