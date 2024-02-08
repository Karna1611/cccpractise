<?php
class Core_Model_Request{
    protected  $_controllerName,$_actionName,$_moduleName;

    public function __construct()
    {
        $url=$this->getRequestUri();
        $url=explode("/",$url);
        $this->controllerName=$url[0];
        $this->actionName=$url[1];
        $this->moduleName=$url[2];
    }
    public function getParams($key=''){
        return ($key=='')
        ? $_REQUEST
        :(isset($_REQUEST[$key])
            ? $_REQUEST[$key]
            : '');
    }
    public function getPostData($key=''){
        return ($key=='')
        ?$_POST
        :(isset($_POST[$key])
            ?$_POST[$key]
            :'');
    }
    public function getQueryData($key=''){
        return ($key=='')
        ?$_GET
        :(isset($_GET[$key])
            ?$_GET[$key]
            :'');
    }
    public function isPost(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            return true;
        }
        return false;
    }

    public function getRequestUri()
        {
            $request_uri=$_SERVER['REQUEST_URI'];
            $request_uri=str_replace("/cybercom_prac/MVC1/","",$request_uri);
            //$text=substr($text,14);
            return $request_uri;    
        }
    public function getControllerName()
    {
        return $this->_controllerName;
    }
    public function getActionName()
    {
        return $this->_actionName;
    }
    public function getModuleName()
    {
        return $this->_moduleName;
    }
    public function getFullControllerClass()
    {
        $fullControllerName="Page_".$this->_controllerName;
    }
}
?>