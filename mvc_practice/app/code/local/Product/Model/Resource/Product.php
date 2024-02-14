<?php
class Product_Model_Resource_Product 
{
    protected $_tableName = "";
    protected $_PrimaryKey = "";

    public function init($_tableName,$_PrimaryKey)
    {
        $this->_tableName = $_tableName;
        $this->_PrimaryKey = $_PrimaryKey;
    }

    public function __construct()
    {
        $this->init('ccc_product','product_id');
    }
}