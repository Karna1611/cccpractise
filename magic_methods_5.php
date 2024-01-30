<?php
class Example {
    public $property1;
    public $property2;

    public function __construct($value1, $value2) {
        $this->property1 = $value1;
        $this->property2 = $value2;
    }

    public static function __set_state($array) {
        $instance = new self($array['property1'], $array['property2']);
        return $instance;
    }
}

$example = new Example('value1', 'value2');

// Export the object using var_export
$exportedObject = var_export($example, true);

echo $exportedObject . "\n";

// Recreate the object using eval and __set_state
eval('$recreatedObject = ' . $exportedObject . ';');

var_dump($recreatedObject);
?>