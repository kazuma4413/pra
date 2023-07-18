<?php
$int=0;
while($int<=100){
    if($int%3==0){
        if($int%5==0){
            echo "Fizzbuzz".PHP_EOL;
        }
        else{
            echo "Fizz".PHP_EOL;
        }
    }
    elseif($int%5==0){
        echo "Buzz".PHP_EOL;
    }
    else{
        echo $int.PHP_EOL;
    }
    $int++;
}

?>