<?php
session_start();
    include_once 'includes/mic.class.php';
    include_once 'includes/database.class.php';
    include_once 'includes/user.class.php';
    include_once 'includes/session.class.php';


    function load_template($name){
        include __DIR__."/../_templates/$name.php";
    }
    function validate_credentials($username , $password){
        if($username == 'sudhir@example.com' and $password == 'password' ){
        return true;
        }
        else{ 
            return false;
        }
    }
    
?>