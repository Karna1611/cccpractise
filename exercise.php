<?php
   
    $a=110;
    $b=100;

    $ans=(($a-$b)/$a)*100;
    echo $ans;
    echo "<br>";

    for($i=1;$i<=100;$i++)
    {
        if($i%3==0)
        {
            echo "$i"."Fizz"."<br>";
            if($i%5==0)
            {
                echo "$i"."FizzBuzz"."<br>";
            }
        }
        else if($i%5==0)
        {
            echo "$i"."Buzz"."<br>";
        }
    }

    function fizzBuzz($input)
    {
        if(($input % 3 === 0) && ($input % 5 === 0)) return 'FizzBuzz';
        else if ($input % 3 === 0) return 'Fizz';
        else if ($input % 5 === 0) return 'Buzz';
        else return 'Not divisible by 3 or 5';
    }

    $result=fizzBuzz(1);
    echo "$result";
    echo "<br>";

    
    function isPrime($n)
    {
        if ($n <= 1)
            return false;
     
        for ($i = 2; $i < $n; $i++)
            if ($n % $i == 0)
                return false;
     return true;
    }
     
   if(isPrime(2))
        echo("Prime")."<br>";
    else
        echo("Non Prime")."<br>";

    
    
        function fibbonacci($number)
    {
        if($number==0)
            return 0;
        else if($number==1)
            return 1;
        else
            return(fibbonacci($number-1) + 
                    fibbonacci($number-2));
    }
    $number=10;
    for($i=0;$i<$number;$i++)
        echo fibbonacci($i),''."<br>";



    function factorial($number)
    {
        if($number <= 1)
            return 1; 
        else
            return $number * Factorial($number - 1); 
    }
    $number=4;
    $answer=factorial($number);
    echo "Factorial of : ".$number." is: ".$answer."<br>";



    $arr=array(2,5,1,7,4);
    echo "ASCENDING ORDER"."<br>";
    echo("Array before sorting is : ");
    print_r($arr);
    echo "<br>";
    for($i=0;$i<count($arr);$i++)
        {
            for($j=0;$j<count($arr)-1;$j++)
            {
                if($arr[$j+1] < $arr[$j])
                {
                    $temp = $arr[$j+1];
                    echo 
                    $arr[$j+1] = $arr[$j];
                    $arr[$j] = $temp;
                }
            }
        }
        print_r($arr);
        echo "<br>";

        echo "DESCENDING ORDER"."<br>";
        $arr = array(2,5,1,7,4);
        echo("Array before sorting is : ");
        print_r($arr);
        echo "<br>";
        for($i = 0; $i < count($arr); $i++) 
        {
            for($j = 0; $j < count($arr)-1; $j++) 
            {
                if($arr[$j+1] > $arr[$j]){
                $temp = $arr[$j+1];
                $arr[$j+1] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
        }
        print_r($arr);
        // function update($table_name,$data,$condition)
        // {
        //     $column=$value=[];
        //     foreach($condition in ) 
        //     "UPDATE ($table_name) SET ($column) = ($value1) WHERE ($value)";
        // }

?>