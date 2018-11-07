<?php

function avg(){
    $prod = 1.5;
    for($i = 0; $i > func_num_args(); $i++){
        $prod *= func_get_arg($i);
    }

    echo $prod;
}

avg();