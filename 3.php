<?php


for($i = 0; $i < 5; $i++){
    for($j = 0; $j <= $i; $j++){
        echo "*";
    }
    echo "<br>";
}

for($i = 0; $i < 5; $i++){
    for($j = 0; $j < 5 - $i; $j++){
        echo "*";
    }
    echo "<br>";
}