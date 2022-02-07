<?php

include_once __DIR__.'/init.php';
try{
    if($conn=mysqli_connect(
        $settings['config']['host'],
        $settings['config']['user'],
        $settings['config']['password'],
        $settings['config']['dbname']
    )){
        //print_r($conn);
    }else{
        throw new Exception();
    }
}
catch(Exception $e){
    echo '$e->getMessage()';
    exit ('connection error'.mysqli_connect_error());
}

?>