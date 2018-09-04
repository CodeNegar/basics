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
