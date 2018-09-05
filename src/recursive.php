<?php

function factorial_recursive($n){
	if($n == 0){
	    return 1;
    }

    return $n * factorial_recursive($n-1);
}

function fibonacci_recursive($n){
    if($n == 0 || $n == 1){
        return $n;
    }

    return fibonacci_recursive($n-1) + fibonacci_recursive($n-2);
}