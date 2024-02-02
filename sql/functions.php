<?php

class query_builder
{
function insert($tablename,$data)
{
    $column = $value = [];
    foreach($data as $fields => $values)
    {
        $column[] = "`{$fields}`";
        $value[] = "'". addslashes($values) ."'";
    }
    $column = implode(",",$column);
    $value = implode(",",$value);
    return "INSERT INTO {$tablename} ({$column}) VALUES ({$value})";
}

function update($tablename,$data,$where)
{
    $column = $wherec = [];
    foreach($data as $fields => $values)
    {
        $column[] = "`{$fields}` =" . "'". addslashes($values) ."'"; 
    }
    $column = implode(",",$column);


    foreach($where as $fields => $values)
    {
        $wherec[] = "`{$fields}` =" . "'". addslashes($values) ."'"; 
    }
    $where = implode(" AND ",$wherec);
    return "UPDATE {$tablename} SET {$column} WHERE {$where}";
}

function delete($tablename,$where)
{
    $column = [];
    foreach($where as $fields => $values)
    {
        $column[] = "`{$fields}` =" . "'". addslashes($values) ."'"; 
    }
    $column = implode("AND",$column);
    return "DELETE FROM {$tablename} WHERE  {$column}";
}

function select($tablename,$where=null,$limit=null)
{
    if($where==null && $limit == null)
    {
        return "SELECT * FROM {$tablename}";
    }
    if($limit != null)
    {
        return "SELECT * FROM {$tablename} ORDER BY pro_id desc LIMIT {$limit}";
    }
    else{
    $column = [];
    foreach($where as $fields => $values)
    {
        $column[] = "`{$fields}` =" . "'". addslashes($values) ."'"; 
    }
    $column = implode("AND",$column);
    return "SELECT * FROM {$tablename} WHERE {$column}";

    }
}
}

class query_execution
{
    function execution($sql,$conn)
    {
        if(mysqli_query($conn,$sql))
        {
            //echo '<script type="text/javascript">alert("Record Inserted")</script>';
            // return header("Location: ../frontend/product_list.php");
            return true;
        }
        else
        {
            // echo "Error: " . $sql . "<br>" . $conn->error;
            return false;
        }
    }
    function select_execution($sql,$conn)
    {
        $data = mysqli_query($conn,$sql);
        if($data != null)
        {
            return $data;
        }
        else
        {
            return false;
        }
    }
}
?>