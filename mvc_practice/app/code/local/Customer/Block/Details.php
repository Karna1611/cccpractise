<?php

class Customer_Block_Details extends Core_Block_Template
{
    protected $_customerId;
    public function __construct()
    {
        $this->setTemplate("customer/account/dashboard.phtml");
    }
    public function getCustomerDetails()
    {
        if( !$this->_customerId )
        {
            return null;
        }
        return Mage::getModel("customer/register")->load($this->_customerId);
    }
    public function setCustomerId($customerId)
    {
        $this->_customerId = $customerId;
    }
}