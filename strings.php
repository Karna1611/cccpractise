
<?php
    // #String functions practise
    // echo strlen("Karna" ) ."\n";
    // echo strlen("")."\n";
    // #strlen returns the length of the string in bytes on sucess and 0 if the string is empty

    // echo str_replace("world","Karna","Hello world!")."\n";
    // echo str_replace("world","Karna","Hello WORLD!")."\n";
    // echo str_ireplace("world","Karna","Hello WORLD!")."\n";
    // #str_replace replaces some characters with some other characters in a string, it is case sensitive. 
    // #str_ireplace is used to perform a case insensitive search.

    // echo strpos("I love football, Messi loves football too!","football")."\n";
    // echo stripos("I love Football,Messi loves football too!","Football")."\n";
    // echo strripos("I love football,Messi loves football too!","football")."\n";
    #strpos and stripos are used to return the first position of a string within another string,case sensitive.
    #strripos is used to return the last position of a string within another string.
    
    // echo substr("Rohit Sharma",10)."\n";
    // echo substr("Rohit Sharma",1)."\n";
    // echo substr("Rohit Sharma",-6)."\n";
    // echo substr("Rohit Sharma",-4)."\n";
    // echo substr("Rohit Sharma",1,8)."\n";
    // echo substr("Rohit Sharma",-6);
    // echo substr("Hello World",5)."\n";
    // echo substr("Hello World",-5);
    
    // echo strtolower("KARNA");
    // echo strtoupper("karna");

    #toUpper and toLower functions are used to change cases 
    
    // $str="Hello World";
    // echo trim($str,"Hed!")
    // $str1="Hello World!";
    // echo ltrim($str1,"Hello");
    // $str="Hello World";
    // echo rtrim($str,"ld!");

    #trim function removes whitespaces from a string.

    // $arr=array('Hello','World','Beautiful','Day');
    // echo implode(" ",$arr);

    // $arr1=array('Rohit','Sharma','Virat','Kohli');
    // echo implode("+",$arr1);
    // echo implode("X",$arr1);

    #separator is used to seperate the array elements 
    #implode function returns a string from the elements of an array 

    // $str="Jeetega jeetega India jeetega";
    // print_r(explode(" ",$str,0))."\n";
    // print_r(explode(',',$str,2))."\n";
    // print_r(explode(',',$str,-1))."\n";
    
    #explode functions breaks a string into an array.
    
    #echo str_repeat("Karna",10);

    // echo strrev("Lionel Messi");

    // echo str_shuffle("Jai Shree Ram");
   
    
?>


