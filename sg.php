<pre>
<?php 

//setcookie("testcookie", "testvalue" ,time()+(86400*30),"/");
include "libs/load.php";

print("SERVER DETAILS");
print_r($_SERVER);


print("SESSION  \n");
 print_r($_SESSION);

if (isset($_GET['clear'])){
    Session::unset();
}

if(isset($_GET['destroy'])){
    Session::destroy();
}

if(isset($_GET['delete'])){
    Session::delete();
}

if(isset($__GET["status"])){
Session::status();
}


if(Session::isset('a')){
    printf("\n A ALREADY EXISTS.....VALUE IS :\n" .Session::get('a'));
}
else{
    Session::set('a',time());
    printf("assigning new value... :\n" .Session::get('a'));
    
}

?>
</pre>
