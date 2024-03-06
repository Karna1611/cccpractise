<?php

class Brand_Model_Brand extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass = "Brand_Model_Resource_Brand";
        $this->_collectionClass = "Brand_Model_Resource_Collection_Brand";
    }
    public function getStatus(){
        $mapping = [
            1=>"Enabled",
            0=>"Disabled"
        ];
        if(isset($this->_data["status"])){
            return $mapping[$this->_data['status']];
        }
    } 
}