<?php

include 'libs/load.php';

$user = 'sudhir';
$pass = isset($_GET['password'])?$_GET['password']:'';
$result = null;

if(isset($_GET['logout'])) {
    Session::destroy();
    echo "<br>";
   die("SESSION DESTROYED : <a href='testlogin.php'>LOGIN</a>"); // CREATES A LINK TO LOGIN AFTER THE SESSION IS DESTROYED 
    
    
}

if(Session::get('is_loggedin')){                //CHECKS IF SESSION IS ACTIVE
    $userdata = Session::get('session_user');
    print("Welcome back, " . $userdata['username']);
 
    $result = $userdata;
}
else{                                     // IF NO SESSION PRESENT USING USER AND PASS IT LOGIN'S 
    printf("no session found ,LOGIN AGAIN:  \n <br>");  
    $result = User::login($user,$pass);

    if($result){
        echo "LOGIN SUCCESS,<br> USER : $result[username]";
        Session::set('is_loggedin',true);
        Session::set('session_user',$result);
    }else{
    echo"login failed ... .$user";
    }
}
// echo "<br>";
//CREATES A LINK TO LOGOUT FROM THE SESSION
echo <<<EOL
<br>
<a href="testlogin.php?logout">LOGOUT</a>
EOL;



?>