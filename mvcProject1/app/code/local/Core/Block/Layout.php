<?php

class Core_Block_Layout extends Core_Block_Template
{
    public function __construct()
    { 
        $this->setTemplate("core/1column.phtml");
        // return $this;
    }
    public function prepareChildren()
    {
        $header = $this->createBlock("page/header");   
        $this->addChild('header', $header);
    }
    public function createBlock($className)
    {
        Mage::getBlock("page/header");
    }
    public function getRequest()
    {
        return Mage::getModel('core/request');
    }



}
  // public function toHtml()
    // {
    // }
    // public function addChild($key, $value)
    // {
    // }
    // public function removeChild($key)
    // {
    // }
    // public function getChild($key)
    // {
    // }