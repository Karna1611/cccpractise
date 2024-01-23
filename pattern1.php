<?php

for ($i = 1; $i < 6; $i++) {
    // Print leading spaces
    for ($j = 1; $j < $i; $j++) {
        echo "-";
    }

    // Print numbers
    for ($k = $i; $k <= 10; $k++) {
        if($k < 12-$i){
        echo $k;
        }else{
            echo "-";
        }
    }

    echo "<br>";
}
for ($i = 4   ; $i >= 1; $i--) {
    // Print leading spaces
    for ($j = 1; $j < $i; $j++) {
        echo "-";
    }

    // Print numbers
    for ($k = $i; $k <= 10; $k++) {
        if($k < 12-$i){
        echo $k;
        }else{
            echo "-";
        }
    }

    echo "<br>";
}
?>

