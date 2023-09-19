<?php

// using for loop

function isEven(int $n){
    for($i=1; $i<=$n; $i++){
        if($i % 2 ==0){
            echo $i . "<br>";
        }
    }
}

isEven(20);

echo "<br>";
// using while loop

function isEvenWhile(int $n){
    $i=1;
    while($i<=$n){
        if($i % 2 == 0){
            echo $i . "<br>";
        }
        $i++;
    }
}

isEvenWhile(20);

echo "<br>";
function isEvenDoWhile(int $n){
    $i=1;

    do{
        if($i % 2 ==0){
            echo $i . "<br>";
        }
        $i++;
    }while($i<=$n);
}

isEvenDoWhile(20);

?>