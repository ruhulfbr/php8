<?php
    $numbers = [1,2,3,4,5,6,7,8,9,10];
    $evens = array_filter( callback:function($n){
        return $n % 2 == 0;
    }, array:$numbers);

    $squres = array_map(array:$numbers, callback:function($n){
        return $n * $n;
    });

    $position = strpos( needle:"World", haystack:"Hello World");

    echo "<pre>";
    print_r($numbers);
    print_r($evens);
    print_r($squres);
    print_r($position);
    echo "</pre>";

?>
