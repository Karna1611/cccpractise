<?php
class Catalog_Model_Resource_Product 
{
    protected $_tableName = "";
    protected $_primaryKey = "";

    public function init($_tableName,$_primaryKey)
    {
        $this->_tableName = $_tableName;
        $this->_primaryKey = $_primaryKey;
    }
    public function getTableName()
    {
        return $this->_tableName;
    }

    public function __construct()
    {
        $this->init('catalog_product','product_id');
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
    public function save(Catalog_Model_Product $product)
    {
        //echo "123";
        $data=$product->getData();
        if(isset($data[$this->_primaryKey]))
        {
            unset($data[$this->_primaryKey]);
        }
        $sql= $this->insertSql($this->getTableName(),$data);
        $id=$this->getAdapter()->insert($sql);
        $product->setId($id);
        //var_dump($id);
    }
    public function insertSql($table_name, $data)
    {
        $columns = $values = [];
        foreach ($data as $col => $val) {
            $columns[] = "`$col`";
            $values[] = "'" . addslashes($val) . "'";
        }

        $columns = implode(",", $columns);
        $values = implode(",", $values);
        return "INSERT INTO {$table_name} ({$columns}) VALUES ({$values});";
    }
}