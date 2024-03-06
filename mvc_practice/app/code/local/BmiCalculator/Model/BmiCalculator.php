<?php

class BmiCalculator_Model_BmiCalculator extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass="BmiCalculator_Model_Resource_BmiCalculator";
        $this->_collectionClass= "BmiCalculator_Model_Resource_Collection_BmiCalculator";
    }
    public function getWeight(){
        $mapping = [
            1=>"Kilogram",
            0=>"Pound"
        ];
        if(isset($this->_data["weight"])){
            return $mapping[$this->_data['weight']];
        }
    } 

    public function getHeight(){
        $mapping = [
            1=>"Meter",
            0=>"Feet"
        ];
        if(isset($this->_data["height"])){
            return $mapping[$this->_data['height']];
        }
    } 


    

}