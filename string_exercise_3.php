<?php
    $sentence="The quick brown fox jumps over the lazy dog";
    echo strpos($sentence,"fox")."<br>";
    echo str_contains($sentence,"cat")? 'present' : 'is not present'."<br>";
    echo substr($sentence,0,20)."<br>";

?>