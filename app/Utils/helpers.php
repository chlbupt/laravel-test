<?php

if (! function_exists('get_params')) {
    function get_params($query_string, $target){
        if( empty($query_string) ) return '';
        parse_str($query_string, $query_arr);
        return $query_arr[$target];
    }
}
