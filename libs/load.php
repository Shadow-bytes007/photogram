<?php
include_once 'includes/session.class.php';
include_once 'includes/mic.class.php';
include_once 'includes/user.class.php';
include_once 'includes/database.class.php';

global $__site_config;
//Note: Change this path if you run this code outside lab.
$__site_config = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/../photogramconfig.json');

Session::start();

function get_config($key, $default=null)   // when function is called it calls the json configuration file present outside of htdocs and converts to array , if no key present returns null
{
    global $__site_config;
    $array = json_decode($__site_config, true);
    if (isset($array[$key])) {
        return $array[$key];
    } else {
        return $default;
    }
}

function load_template($name)
{
    include $_SERVER['DOCUMENT_ROOT'] . "/legacy_php/photogram_app/_templates/$name.php"; //not consistant.
}

function validate_credentials($username, $password)
{
    if ($username == "sibi@selfmade.ninja" and $password == "password") {
        return true;
    } else {
        return false;
    }
}
