<?php

function validate_balanced_braces($input){
    $stack = [];
    $len = strlen($input);

    for($i=0; $i<$len; $i++){
        $char = $input[$i];

        if(
            $char == '('
            || $char == '{'
            || $char == '['
        ){
            array_push($stack, $char);
        }elseif (
            $char == ')'
            || $char == '}'
            || $char == ']'
        ){
            $last_brace = array_pop($stack);

            if(
                $last_brace == '(' && $char != ')'
                || $last_brace == '{' && $char != '}'
                || $last_brace == '[' && $char != ']'

            ){
                return false;
            }
        }
    }

    if(!empty($stack)){
        return false;
    }

    return true;
}