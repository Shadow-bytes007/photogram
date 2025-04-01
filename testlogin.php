<?php
include 'libs/load.php';

$user = "fooboo1";
$pass = isset($_GET['pass']) ? $_GET['pass'] : '';
$result = null;

if (isset($_GET['logout'])) {
    Session::destroy();
    die("SESSION DESTROYED : <a href='testlogin.php'>LOGIN</a>"); // CREATES A LINK TO LOGIN AFTER THE SESSION IS DESTROYED 
    
}

if (Session::get('is_loggedin')) {                //CHECKS IF SESSION IS ACTIVE
    $username = Session::get('session_username');
    $userobj = new User($username);
    print("Welcome Back ".$userobj->getFirstname());
    print("<br>".$userobj->getBio());
    $userobj->setBio("Making new things...");
    print("<br>".$userobj->getBio());
} else {
    printf("No session found, trying to login now. <br>");     // IF NO SESSION PRESENT USING USER AND PASS IT LOGIN'S
    $result = User::login($user, $pass);
    
    if ($result) {
        $userobj = new User($user);
        echo "Login Success ", $userobj->getUsername();
        Session::set('is_loggedin', true);
        Session::set('session_username', $result);
    } else {
        echo "Login failed, $user <br>";
    }
}

//CREATES A LINK TO LOGOUT FROM THE SESSION
echo <<<EOL
<br><br><a href="logintest.php?logout">Logout</a>
EOL;
