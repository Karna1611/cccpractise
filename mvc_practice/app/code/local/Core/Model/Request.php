<?php
class Core_Model_Request
{
    protected $_modelName;
    protected $_actionName;
    protected $_controllerName;
    public function getModelName()
    {
        return $this->_modelName;
    }
    public function getControlleName()
    {
        return $this->_controllerName;
    }
    public function getActionName()
    {
        return $this->_actionName;
    }
    public function __construct(){
        $uri = $this->getRequestUri();
        $uri = array_filter(explode("/", $uri));
        $this->_modelName = isset($uri[0])?$uri[0]:"page";
        $this->_controllerName = isset($uri[1])?$uri[1]:"index";
        $this->_actionName = isset($uri[2])?$uri[2]:"index";
    }
    public function getFullControllerName()
    {
        $model = $this->_modelName;
        $controller = $this->_controllerName;
		// echo $controller;
        return ucfirst($model)."_Controller_".ucfirst($controller);
    }
    public function getParams($key = '', $arg=null)
    {
        return ($key == '')
            ? $_REQUEST
            : (isset($_REQUEST[$key])
                ? $_REQUEST[$key]
                : ((!is_null($arg)) ? $arg : '')
            );
    }

	public function getPostData($key = '') {
		return ($key == '')
			? $_POST
			: (isset($_POST[$key])
				? $_POST[$key]
				: ''
			);
	}

	public function getQueryData($key = '') {
		return ($key == '')
			? $_GET
			: (isset($_GET[$key])
				? $_GET[$key]
				: ''
			);
	}

	public function isPost()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		    return true;
		}
		return false;
	}
    public function getRequestUri()
	{
		$str = "/cybercom_prac/mvc_practice/";
		$request =  $_SERVER['REQUEST_URI'];
		$uri = str_replace($str,"",$request);
		if(strpos($uri,'?') !== false) 
			$uri = stristr($uri, '?', True);
		return $uri;	
	}
}


?>