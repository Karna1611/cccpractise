<?php

    if(6<10)
    {
        echo "Have a good day!"."<br>";
    }
    $x=10;
    if($x==10)
    {
        echo "X is 10"."<br>";
    }
    $captain="Rohit";
    if($captain=="Virat")
    {
        echo "Wins"."<br>";
    }
    else
    {
        echo "Lost"."<br>";
    }
    $time=date("K");
    echo "The hour of the server is ".$time."<br>";
    echo "And will give the following message: "."<br>";
    if($time<"10")
    {
        echo "Good morning!"."<br>";
    }
    elseif($time<"20")
    {
        echo "Have a good day!"."<br>";
    }
    else
    {
        echo "Good night!"."<br>";
    }

    //Shorthand IF
    $x=5;
    if($x<10) $y="Hello";
    echo $y."<br>";

    //Nestef if
    $x=18;
    if($x>10)
    {
        echo "Above 10"."<br>";
        if($x==18)
        {
            echo "Eligible to vote"."<br>";
        }
    }
?>
