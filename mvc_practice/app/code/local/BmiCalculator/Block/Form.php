<?php

class BmiCalculator_Block_Form extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate("bmicalculator/form.phtml");
    }
    public function getBmiCalculator()
    {
        return Mage::getModel("bmicalculator/bmicalculator")->load($this->getRequest()->getParams('id',0));
    }

}