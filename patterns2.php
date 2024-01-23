<?php

for ($i = 1; $i < 7; $i++) {
    // Print leading spaces
    for ($j = 1; $j < $i; $j++) {
        echo "-";
    }

    // Print numbers
    for ($k = $i; $k <= 11; $k++) {
        if($k < 13-$i){
        echo $k;
        }else{
            echo "-";
        }
    }

    echo "<br>";
}
for ($i = 5  ; $i >= 1; $i--) {
    // Print leading spaces
    for ($j = 1; $j < $i; $j++) {
        echo "-";
    }

    // Print numbers
    for ($k = $i; $k <= 11; $k++) {
        if($k < 13-$i){
        echo $k;
        }else{
            echo "-";
        }
    }

    echo "<br>";
}
?>

