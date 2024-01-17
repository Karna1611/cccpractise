
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

    echo strpos("I love football, Messi loves football too!","football")."\n";
    echo stripos("I love Football,Messi loves football too!","Football")."\n";
    // echo strripos("I love football,Messi loves football too!","football")."\n";
    #strpos and stripos are used to return the first position of a string within another string,case sensitive.
    #strripos is used to return the last position of a string within another string.
    
    // echo substr("Rohit Sharma",10)."\n";
    // echo substr("Rohit Sharma",1)."\n";
    // echo substr("Rohit Sharma",-6)."\n";
    // echo substr("Rohit Sharma",-4)."\n";
    // echo substr("Rohit Sharma",1,8)."\n";
    // echo substr("Rohit Sharma",-6);
    echo substr("Hello World",5)."\n";
    echo substr("Hello World",-5);
    
    
    
?>


