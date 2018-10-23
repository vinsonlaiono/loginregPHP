<?php
    define('__CONFIG__', true);

    require_once "../database/config.php";
    
    
    // $array = ['test', 'test1', 'test3'];
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        header('Content-Type: application/json');
        $return = [];

        $return['redirect'] = '/dashboard.php';
        $return['name'] = "Vinson Aiono";

        echo json_encode($return, JSON_PRETTY_PRINT);
    } else {
        exit('test');
    }


?>