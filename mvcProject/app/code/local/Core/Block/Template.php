<?php

class Core_Block_Template extends Core_Block_Abstract
{
    public $template;
    public function toHtml()
    {
        //echo "!23";
        return $this->render();
    }
    public function toAbc()
    {
        echo "From abc";
    }
    public function addChild($key, $value)
    {
    }
    public function removeChild($key)
    {
    }
    public function getChild($key)
    {
    }
    public function setTemplate($template)
    {
        $this->template = $template;
    }
    public function getTemplate()
    {
        return $this->template;
    }

}