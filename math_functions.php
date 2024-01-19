<?php
    echo(pi())."<br>";
    echo(min(0, 150, 30, 20, -8, -200))."<br>";
    echo(max(0, 150, 30, 20, -8, -200))."<br>";
    echo(abs(-7.8))."<br>";
    echo(sqrt(64.25))."<br>";
    echo(round(0.60))."<br>";
    echo(round(0.49))."<br>";
    echo(round(0.50))."<br>";
    echo(rand())."<br>";
    echo(rand(10, 100))."<br>";

    echo(ceil(0.60) . "<br>");
    echo(ceil(0.40) . "<br>");
    echo(ceil(5) . "<br>");
    echo(ceil(5.1) . "<br>");
    echo(ceil(-5.1) . "<br>");
    echo(ceil(-5.9))."<br>";

    echo(floor(0.60) . "<br>");
    echo(floor(0.40) . "<br>");
    echo(floor(5) . "<br>");
    echo(floor(5.1) . "<br>");
    echo(floor(-5.1) . "<br>");
    echo(floor(-5.9));

    echo(pow(2,4) . "<br>");
    echo(pow(-2,4) . "<br>");
    echo(pow(-2,-4) . "<br>");
    echo(pow(-2,-3.2));
    
?>