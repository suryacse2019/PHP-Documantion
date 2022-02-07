<?php
require_once __DIR__.'/query-builder/init.php';
//echo bash_url;
function url($url=''){
    if($url==''){
        return bash_url;
    }
    return bash_url.$url;
}
#post function

function post($key=''){
    if($key==''){
        return $_POST;
    }
    return $_POST[$key];
}

#request function

function request($key=''){
    if($key==''){
        return $_request;
    }
    return $_POST[$key];
}

#get function

function get($key=''){
    if($key==''){
        return $_GET;
    }
    return $_GET[$key];
}

?>