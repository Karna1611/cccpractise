<?php

class Core_Model_DB_Adapter
{

    public $config = [
        "host"=> "localhost",
        "user"=> "root",
        "password"=> "",
        "db"=>"ccc_practise",

    ];
    public $connect = null;
    public function connect()
    {
        if(is_null($this->connect)){
            $this->connect = mysqli_connect(
                $this->config["host"], 
                $this->config["user"], 
                $this->config["password"], 
                $this->config["db"]);
        }
        return $this->connect;
    }
    public function fetchAll($query)
    {
        $row=[];
        $result = $this->connect()->query($query);
        while($_row = mysqli_fetch_assoc($result)){
            $row[] = $_row;
        }
        return $row;
    }
    public function fetchPairs($query)
    {

    }
    public function fetchOne($query)
    {

    }
    public function fetchRow($query)
    {
        $row=[];
        $this->connect();
        $query=$query . " LIMIT 1";
        $result = mysqli_query($this->connect, $query);
        while ($data = mysqli_fetch_assoc($result)){
            $row = $data;
        }
        return $row;
    }
    public function insert($query)
    {
        
        $sql=mysqli_query($this->connect(),$query);
        if ($sql){  
            return mysqli_insert_id($this->connect());
        }
        else
        {
            return FALSE;
        }

    }
    public function update($query)
    {
        $sql = mysqli_query($this->connect(),$query);
        if ($sql) {
           return TRUE;
        } else {
            return FALSE;
        }
    }
    public function delete($query)
    {
        $sql = mysqli_query($this->connect(), $query);
        if($sql){ 
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function query($query)
    {

    }
}


?>