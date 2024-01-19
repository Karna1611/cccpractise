
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
    
    // print_r(str_split("Karna"))."<br>";
    // echo "<br>";
    // print_r(str_split("Karna",3))."<br>";

    // echo str_word_count("Hello World")."<br>";
    // print_r(str_word_count("Hello World",1));
    // echo "<br>";
    // print_r(str_word_count("Hello World",2));
    // echo "<br>";
    //Index 1 Return an array with the words from the string:
    //Index 2 Return an array where the key is the position of the word in the string, and value is the actual word:

    // echo substr_replace("Hello","world",0)."<br>";
    // echo substr_replace("Hello world","earth",6)."<br>";
    // echo substr_replace("world","Hello ",0,0)."<br>";
    // $replace = array("1: AAA","2: AAA","3: AAA");
    // echo implode("<br>",substr_replace($replace,'BBB',3,3))."<br>";

    // $name="John";
    // echo str_pad($name,6,"_",STR_PAD_LEFT)."<br>";
    // echo str_pad($name,8,"*")."<br>";
    //By default padding is right

    //setlocale (LC_COLLATE, 'NL');
    // echo strcoll("Hello World!","Hello World!");
    // echo "<br>";

    // echo strcoll("Hello World!","Karna Trivedi!");
    // echo "<br>";
    //<0 - if string1 is less than string2
    //>0 - if string1 is greater than string2

    //Print the number of characters found in "Hello world!" before the character "w":
    //echo strcspn("Hello world!","w")."<br>";

    //Find the first occurrence of "world" inside "Hello world!", and return the rest of the string:
    // echo stristr("Hello world!","WORLD")."<br>";
    // //Search a string for the ASCII value of "o", and return the rest of the string:
    // echo stristr("Hello world!",111);
    // //Return the part of the string before the first occurence of "world":
    // echo stristr("Hello world!","WORLD",true);   
    
    //The strrev() function reverses a string.
    //echo strrev("Hello World!")."<br>";

    //The ucfirst() function converts the first character of a string to uppercase.
    //echo ucfirst("hello world!")."<br>";
    // lcfirst() - converts the first character of a string to lowercase
    // ucwords() - converts the first character of each word in a string to uppercase
    // strtoupper() - converts a string to uppercase
    // strtolower() - converts a string to lowercase

    //echo ucwords("hello world");

?>


