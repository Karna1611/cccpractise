<?php
class Example {
    public function __invoke($arg) {
        echo "Object invoked with argument: $arg<br>";
    }
}

$example = new Example();

// Calling the object as a function, which triggers __invoke
$example('Hello, World!');
?>