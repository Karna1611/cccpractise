<?php
    class Example {
        private $property;
    
        public function __construct($value) {
            $this->property = $value;
        }
    
        public function __toString() 
        {
            return 'The value of the property is: ' . $this->property."<br>";
        }

        

    }
    
    $example = new Example('Hello, World!');
    echo $example."<br>"; 
   
?>