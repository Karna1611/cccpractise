<?php

class Core_Block_Abstract
{
    public $template;
    public $data=[];
    public function setTemplate($template)
    {
        $this->template=$template;
    }
    public function getTemplate()
    {
        return $this->template;
    }
    public function __get($key)
    {
        return isset($this->data[$key])?$this->data[$key]:null;
    }
    public function __unset($key)
    {
        unset($this->data[$key]);
    }
    public function __set($key, $value)
    {
        $this->data[$key]=$value;
    }
    public function addData($key, $value)
    {
        $this->data[$key]=$value;
    }
    public function getData($key = null)
    {
        // if (is_null($key))
        // {
        //     return $this->data;
        // }    
        return isset($this->data[$key])?$this->data[$key]:null;
    }
    public function setData($data)
    {
        $this->data=$data;
    }
    public function getUrl($action = null, $controller = null, $params = [], $resetParams = false)
    {
        $url = $this->getTemplate();
        if ($resetParams) {
            $params = array_merge($params, $this->data);
        }
    }
    public function getRequest()
    {
        return $this->request;
    }
    public function render()
    {
        //echo "123";
        //var_dump ($this->getTemplate());
        include Mage::getBaseDir('app').'/design/frontend/template/'.$this->getTemplate();
    }

}