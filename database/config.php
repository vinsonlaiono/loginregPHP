<?php
    // if there is no constant defined call config do not load this file
    if(!defined('__CONFIG__')) {
        exit('Page Load Fail Error = {ID:10-T}');
    }

    // Include the DB.php file
    include_once "DB.php";

    $con = DB::getConnection();

?>