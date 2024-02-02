<?php

    class A
    {
        public $a=10;
        public function test()
        {
            $this->b=1;
            return $this;
        }
    }
$obj=new A();
$obj->test()->test();


?>