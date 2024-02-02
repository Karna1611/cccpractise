<?php
    class Model_Product extends Model_Abstract
    {
        public $tablename="ccc_product";

        public function __construct()
        {

        }

        public function save($data)
        {
            echo "<pre>";
            $sql=$this->getQueryBuilder()
                ->insert(
                    $this->tablename,
                    $data
                );
            $this->getQueryBuilder()->exec($sql);
        }

    }
?>