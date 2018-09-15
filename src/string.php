<?php

function pattern_matching_naive($haystack, $needle){
    $hlen = strlen($haystack);
    $nlen = strlen($needle);

    for ($i=0; $i<$hlen - $nlen; $i++){
        for ($j=0; $j<$nlen; $j++) {
            if($haystack[$i + $j] != $needle[$j]){
                break;
            }
            if($j == $nlen - 1){
                return $i;
            }

        }
    }

    return -1;
}

function pattern_matching_kmp($haystack, $needle){
    // todo: complete the function and test
}