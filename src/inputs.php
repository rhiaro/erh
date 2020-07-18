<?php

namespace rhiaro\ERH;

use EasyRdf_Literal;


function make_tags($input_array, $base_url){
    $tags_string = $input_array["string"];
    unset($input_array["string"]);
    $tags = explode(",", $tags_string);
    foreach($tags as $tag){
        if(strlen(trim($tag)) > 0){
            $input_array[] = $base_url.urlencode(trim($tag));
        }
    }
    return $input_array;
}

function make_xsd_date($date_parts){
    $date_str = make_date_string($date_parts);
    $date = new EasyRdf_Literal($date_str, null, "xsd:dateTime");
    return $date;
}

function make_date_string($date_parts){
    $date_str = $date_parts["year"]."-".$date_parts["month"]."-".$date_parts["day"]."T".$date_parts["time"].$date_parts["zone"];
    return $date_str;
}