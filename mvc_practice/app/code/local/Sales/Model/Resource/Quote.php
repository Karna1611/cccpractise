<?php

class Sales_Model_Resource_Quote extends Core_Model_Resource_Abstract
{
    public function _construct()
    {
        $this->init("quote","product_id");
    }
} 