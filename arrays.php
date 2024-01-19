<?php
    $team1=array("Rohit","Jaiswal");
    $team2=array("Gill","Kohli");
    print_r(array_merge($team1,$team2));
    echo "<br>";

    //Array merge Merge two arrays into one array:

    //Merge two associative arrays into one array:
    $a1=array("a"=>"red","b"=>"green");
    $a2=array("c"=>"blue","b"=>"yellow");
    print_r(array_merge($a1,$a2));
    echo "<br>";

    //Using only one array parameter with integer keys:
    $a=array(3=>"red",4=>"green");
    print_r(array_merge($a));
    echo "<br>";

    //Array combinedThe array_combine() function creates an array by using the elements from one "keys" array and one "values" array.
    $fname=array("Peter","Ben","Joe");
    $age=array("35","37","43");
    $c=array_combine($fname,$age);
    print_r($c);
    echo "<br>";

    //range
    $number = range(0,5);
    print_r ($number);
    echo "<br>";

    $number = range(0,50,10);
    print_r ($number);
    echo "<br>";

    $letter = range("a","d");
    print_r ($letter);
    echo "<br>";

    //Array push
    $a=array("red","green");
    array_push($a,"blue","yellow");
    print_r($a);
    echo "<br>";

    //pop Delete the last element of an array:
    $a=array("red","green","blue");
    array_pop($a);
    print_r($a);
    echo "<br>";

    //unshift (inserts new elements to an array)
    $a=array("a"=>"red","b"=>"green");
    array_unshift($a,"blue");
    print_r($a);
    echo "<br>";

    //shift Remove the first element (red) from an array, and return the value of the removed element:
    $a=array("a"=>"red","b"=>"green","c"=>"blue");
    array_shift($a);
    print_r($a);
    echo "<br>";
    
    //Splice Remove elements from an array and replace it with new elements:
    $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    $a2=array("a"=>"purple","b"=>"orange");
    print_r(array_splice($a1,0,2,$a2));
    echo "<br>";
    print_r($a1);
    echo "<br>";

    $a1=array("0"=>"red","1"=>"green");
    $a2=array("0"=>"purple","1"=>"orange");
    array_splice($a1,1,0,$a2);
    print_r($a1);
    echo "<br>";
    //array_splice(array, start, length, array)

    //count
            $cars=array
        (
        "Volvo"=>array
        (
        "XC60",
        "XC90"
        ),
        "BMW"=>array
        (
        "X3",
        "X5"
        ),
        "Toyota"=>array
        (
        "Highlander"
        )  
        );

        echo "Normal count: " . count($cars)."<br>";
        echo "Recursive count: " . count($cars,1); "<br>";

        //key exists Check if the key "Volvo" exists in an array:
        $a=array("Volvo"=>"XC90","BMW"=>"X5","Audi"=>"R8");
            if (array_key_exists("Mercedes",$a))
              {
                echo "<br>";
                echo "Key exists!"; 
              }
            else
              {
                echo "<br>";
                echo "Key does not exist!";
              }
        //array_keys Return an array containing the keys:
        $a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
        print_r(array_keys($a));
        echo "<br>";

        //array_keys
        $a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
        print_r(array_keys($a));
        echo "<br>";

        //using the value parameter 
        $a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
        print_r(array_keys($a,"Highlander"));
        echo "<br>";

        //Using the strict parameter, true:
        $a=array(10,20,30,"10");
        print_r(array_keys($a,"10",true));
        echo "<br>";

        $a=array(10,20,30,"10");
        print_r(array_keys($a,"10",false));
        echo "<br>";

        //The array_values() function returns an array containing all the values of an array.
        $a=array("Name"=>"Peter","Age"=>"41","Country"=>"USA");
        print_r(array_values($a));
        echo "<br>";

        //array_search() Search an array for the value "red" and return its key:
            $a=array("a"=>"red","b"=>"green","c"=>"blue");
            echo array_search("red",$a);
            echo "<br>";

            $a=array("a"=>"5","b"=>5,"c"=>"5");
            echo array_search(5,$a,true);
            echo "<br>";

            //The array_reverse() function returns an array in the reverse order.
            $a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
            print_r(array_reverse($a));
            echo "<br>";

            //Filter the values of an array using a callback function:
            function test_odd($var)
            {
            return($var & 1);
            }

            $a1=array(1,3,2,3,4);
            print_r(array_filter($a1,"test_odd"));
            echo "<br>";

            //Send each value of an array to a function, multiply each value by itself, and return an array with the new values:
            function myfunction($v)
            {
            return($v*$v);
            }
            $a=array(1,2,3,4,5);
            print_r(array_map("myfunction",$a));
            echo "<br>";

            //Send the values in an array to a user-defined function and return a string:
            function myfunction1($v1,$v2)
            {
                return $v1 . "-" . $v2;
            }
            $a=array("Dog","Cat","Horse");
            print_r(array_reduce($a,"myfunction1"));
            echo "<br>";

            //The array_slice() function returns selected parts of an array.
            $a=array("red","green","blue","yellow","brown");
            print_r(array_slice($a,2));
            echo "<br>";

            $a=array("red","green","blue","yellow","brown");
            print_r(array_slice($a,-2,1));
            echo "<br>";

            //Remove elements from an array and replace it with new elements:
            $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
            $a2=array("a"=>"purple","b"=>"orange");
            array_splice($a1,0,2,$a2);
            print_r($a1);
            echo "<br>";

            $a1=array("0"=>"red","1"=>"green");
            $a2=array("0"=>"purple","1"=>"orange");
            print_r(array_splice($a1,1,0,$a2));
?>