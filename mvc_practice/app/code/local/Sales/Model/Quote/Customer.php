<?php

class Sales_Model_Resource_Collection_Quote_Customer extends Core_Model_Resource_Collection_Abstract
{
    public function init()
    {
        $this->init('sales_quote','quote_id');
    }
}