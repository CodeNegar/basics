<?php

function bubble_sort($items){
	$count = count($items);
	for ($i=0; $i < $count; $i++) {
		for ($j=$i; $j < $count; $j++) {
			if($items[$i] > $items[$j]){
			    $temp = $items[$i];
			    $items[$i] = $items[$j];
			    $items[$j] = $temp;
			}
		}
	}

	return $items;
}
