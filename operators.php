<?php
    $x=10;
    $y=5;
    print_r("Sum is : ".$x+$y);
    echo "<br>";
    print_r("Difference is : ".$x-$y);
    echo "<br>";
    print_r("Product is : ".$x*$y);
    echo "<br>";
    print_r("Division is : ".$x/$y);
    echo "<br>";
    print_r("Remainder is : ".$x%$y);
    echo "<br>";
    print_r("Exponential form is : ".$x**$y);
    echo "<br>";

    $a=10;
    $b=20;
    echo "Before swapping : ".$a."<br>";
    $a=$b;
    echo "After swapping : ".$a."<br>";

    #Swapping program
    $x=10;
    $y=20;
    echo "Before swapping value of x is : ".$x."<br>";
    echo "Before swapping value of y is : ".$y."<br>";
    $x=$x+$y;
    $y=$x-$y;
    $x=$x-$y;
    echo "After swapping value of x is : ".$x."<br>";
    echo "After swapping value of y is : ".$y."<br>";

    $a=20;
    $b=5;
    $a+=$b;
    echo "Value is : ".$a."<br>";
    $a-=$b;
    echo "Value is : ".$a."<br>";
    $a*=$b;
    echo "Value is : ".$a."<br>";
    $a/=$b;
    echo $a/=$b;
    echo "Value is : ".$a."<br>";
    $a%=$b;
    echo $a%=$b;
    echo "Value is : ".$a."<br>";

    $x=10;
    $y='10';
    var_dump($x==$y);
    echo "<br>";
    var_dump($x===$y);
    echo "<br>";
    var_dump($x!=$y);
    echo "<br>";
    var_dump($x<>$y);
    echo "<br>";
    var_dump($x>$y);
    echo "<br>";
    var_dump($x<=>$y);
    echo "<br>";

    $x=100;
    $y=50;
    if ($x == 100 and $y == 50) 
    {
        echo "Hello world!";
    }
    echo "<br>";
    if ($x == 10 or $y == 0) 
    {
        echo "Hello world!";
    }
    echo "<br>";
    if ($x == 100 xor $y == 50) 
    {
        echo "Hello world!";
    }
    echo "<br>";
    if (!($x == 90)) {
        echo "Hello world!";
    }
    echo "<br>";

    $txt1 = "Hello";
    $txt2 = " world!";
    echo $txt1 . $txt2;
    echo "<br>";

    $txt1 = "Hello";
    $txt2 = " world!";
    $txt1 .= $txt2;
    echo $txt1;
    echo "<br>";

    $x = array("a" => "red", "b" => "green");  
    $y = array("a" => "blue", "b" => "yellow","c" => "black","d" => "gold");

    // $a = array("a" => "apple", "b" => "banana");
    // $b = array("a" => "pear", "b" => "strawberry", "c" => "cherry");
    // print_r($a+$b);
    echo "<br>";
    print_r($x + $y);
    echo "<br>";

    var_dump($x == $y);
    echo "<br>";

    var_dump($x === $y);
    echo "<br>";

    var_dump($x != $y);
    echo "<br>";

    var_dump($x !== $y);
    echo "<br>";

    echo $status=(empty($user)) ? "anonymous" : "logged in";
    echo "<br>";

    $user="John Doe";
    echo $status=(empty($user)) ? "anonymous" : "logged in";
    echo("<br>");

    echo $user = $_GET["user"] ?? "anonymous";
    echo("<br>");

    echo $color = $color ?? "red";
    echo "<br>";
?>