<?php

class Sales_Controller_Quote extends Core_Controller_Front_Action
{
    public function addAction()
    {
        echo "<pre>";
        $request=['product_id'=>48,'qty'=>5];
        $quote=Mage::getSingleton('sales/quote')
               ->addProduct($request);
    }

    public function editAction()
    {
        $this->linkActionProceed();
    }

    public function removeAction()
    {
        $this->removeActionProceed();
    }
    
    public function postDataAction()
    {
        $this->postDataActionProceed();
    }
}