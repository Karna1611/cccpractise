<?php
   class Student
   {
        private $data=array();
        public function __construct()
        {
                echo "This is construct function"."<br>";
                
        }

        public function hello()
        {
            echo "Hello everyone"."<br>";
        }

        public function __set($name,$value)
        {
            echo "__ set function called : "."<br>";
            $this->data[$name]=$value;
            echo $name." ".$value."<br>";
        }

        public function __get($name)
        {
            if(isset($this->data[$name]))
            {
                echo "__ get function called : "."<br>";
                return $this->data[$name]."<br>";
            }
            else
                echo "__get method not called"."<br>";
        }

        public function __call($name, $arguments) 
        {
            echo "Calling method '$name' with arguments: " . implode(', ', $arguments) . "<br>";
        }

        public static function __callStatic($name, $arguments) 
        {
            echo "Calling static method '$name' with arguments: " . implode(', ', $arguments) . "<br>";
        }

        public function __isset($name) 
        {
            echo "__isset method called : "."<br>";
            return isset($this->data[$name]);
        }    

        public function __unset($name) 
        {
            echo "__unset method called : "."<br>";
            unset($this->data[$name]);

        }

        public function __destruct()
        {
            echo "This is destruct function"."<br>";
        }

   }
$test=new Student();
$objStudent=new Student();
$objStudent->phone='9879419974';
echo $objStudent->phone;
$objStudent->nonExistingMethod('arg1','arg2');
Student::nonExistingStaticMethod('arg1','arg2');
$objStudent->foo='bar';
    if(isset($objStudent->foo))
    {
        echo "Property 'foo' is set"."<br>";
    }
    else
    {
        echo "Property 'foo' is not set"."<br>";
    }
    if (isset($objStudent->undefinedProperty))
        echo "Property 'undefinedProperty' is set.<br>";
    else 
        echo "Property 'undefinedProperty' is not set.<br>";
unset($objStudent->foo);
echo isset($objStudent->foo) ? "Property 'foo' is set.<br>" : "Property 'foo' is not set.<br>"; 

//echo $objStudent->getStudentDetails(1);
$test->hello();


?>