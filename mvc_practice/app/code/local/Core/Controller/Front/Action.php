<?php

class Core_Controller_Front_Action
{
    protected $layout;
    public function getLayout()
    {
        if(is_null($this->layout))
        {
            $this->layout = Mage::getBlock("core/layout");
        }
        return $this->layout;
    }
}


?>