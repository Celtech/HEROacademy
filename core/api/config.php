<?php
    //Global definitions
    define("LIVE", "live");
    define("DEBUG", "debug");
    define("BASEURL", isset($_SERVER['HTTPS']) ? 'https://' . $_SERVER['SERVER_NAME'] . '/' : 'http://' . $_SERVER['SERVER_NAME'] . '/');

    //Database variables
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "heroacademy";

    //Staging variables
    $build = DEBUG;

    if($build === DEBUG) {
        ini_set( "display_errors", "1" );
        error_reporting( E_ALL & ~E_NOTICE );
    } else {
        error_reporting(0);
    }

    //$db = new mysqli($host, $username, $password, $database);
    //if ($db->connect_error) { die('Connect Error (' . $db->connect_errno . ') '. $db->connect_error); }
