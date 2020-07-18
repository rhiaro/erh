<?php

namespace rhiaro\ERH;


function valid_string($input){
    if(isset($input) && !empty($input) && trim($input) !="" && trim($input != " ")){
        return true;
    }
    return false;
}