<?php
    $text="Hello, World! How are you doing?";
    echo strlen($text)."<br>";
    echo strtolower($text)."<br>";
    echo strtoupper($text)."<br>";
    echo str_replace("How are you doing?","Fine,thank you!",$text)."\n"."<br>";
    echo substr($text,0,10)."<br>";
    echo substr($text,8)."<br>";

?>