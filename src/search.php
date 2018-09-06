<?php

function sequence_search($haystack, $needle){
	$count = count($haystack);
	for ($i=0; $i < $count; $i++) {
		if($haystack[$i] == $needle){
		    return $i;
        }
	}

	return -1;
}

function binary_search($haystack, $needle){
    $max = count($haystack) - 1;
    $min = 0; $mid = 0;

    while ($max > $min){
        $mid = (integer) (($max + $min) / 2);
        if($haystack[$mid] > $needle){
            $max = $mid - 1;
        }elseif ($haystack[$mid] < $needle){
            $min = $mid + 1;
        }else{
            return $mid;
        }
    }

    return -1;
}