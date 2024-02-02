<?php
    class Lib_Sql_Query_Builder extends Lib_Connection
    {
        public function __construct()
        {

        }

        public function insert($tablename,$data)
        {
            $columns=$values=[];
            foreach ($data as $key => $value)
            {
                $columns[]=sprintf("`%s`",$key);
                $values[]=sprintf("'%s'",addslashes($value));
            }
            $columns=implode(",",$columns);
            $values=implode(",",$values);
            return "INSERT INTO {$tablename} ({$columns}) VALUES ({$values});";
        }
    }

?>