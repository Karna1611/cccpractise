<?php
class Product_Model_Resource_Product 
{
    protected $_tableName = "";
    protected $_primaryKey = "";

    public function init($_tableName,$_primaryKey)
    {
        $this->_tableName = $_tableName;
        $this->_primaryKey = $_primaryKey;
    }

    public function __construct()
    {
        $this->init('ccc_product','product_id');
    }
    public function load($id, $column=null)
    {
       $sql= "SELECT * FROM {$this->_tableName} WHERE
       {$this->_primaryKey }={$id} LIMIT 1 ";
       echo $sql;
       return $this->getAdapter()->fetchRow($sql);
       
    }

    public function getAdapter()
    {
        return new Core_Model_DB_Adapter();
    }
    public function getPrimaryKey()
    {
        return $this->_primaryKey;   
    }
}