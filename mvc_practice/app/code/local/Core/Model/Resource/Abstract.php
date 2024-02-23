<?php

class Core_Model_Resource_Abstract 
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
       {$this->_primaryKey }={$id}";
       //echo $sql;
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
    public function save(Core_Model_Abstract $abstract)
    {
        $data=$abstract->getData();
        if(isset($data[$this->_primaryKey]))
        {
            unset($data[$this->_primaryKey]);
        }
        $sql= $this->insertSql($this->getTableName(),$data);
        $id=$this->getAdapter()->insert($sql);
        $abstract->setId($id);
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

    public function delete(Core_Model_Abstract $abstract)
    {
        $query = $this->deleteSql($this->getTableName(),['product_id'=>$abstract->getId()]) ;
        return $this->getAdapter()->delete($query);
    }
    public function deleteSql($table_name, $whereCond)
    {
        $data = [];
        foreach ($whereCond as $field => $val) {
            $data[] = "`$field`='$val'";
        }
        $data = implode(" AND ", $data);
        return "DELETE FROM {$table_name} WHERE ({$data})";
    }
    public function updateSql($table_name, $data = [], $where = [])
    {
        $columns = $whereCond = [];
        foreach ($data as $field => $vale) {
            $columns[] = " `$field` = '$vale'";
        }

        foreach ($where as $field => $vale) {
            $whereCond[] = " `$field` = '$vale'";
        }
        $columns = implode(",", $columns);
        $whereCond = implode(" AND ", $whereCond);

        $query = "UPDATE {$table_name} SET {$columns} WHERE {$whereCond}";
        return $query;
    }
    public function update(Core_Model_Abstract $abstract,$id)
    {
        $data = $abstract->getData();
        $query = $this->updateSql($this->getTableName(),$data,["product_id"=>$id]);
        $this->getAdapter()->update($query);
    }
}