<pre>
<?php
 include 'libs/load.php';
 //include_once 'libs/includes/mic.class.php';no need to load hear coz already loaded in load.php

 
     print("_SERVER \n");
    print_r($_SERVER);
    // print("_GET \n");
    // print_r($_GET);
    // print("_POST \n");
    // print_r($_POST );
    // print("_FILE \n");
    // print_r($_FILES);
    // print("_COOKIES \n");
    // print_r($_COOKIE );S
    // print("_PUT \n");
// if(signup("sudhir","password","sudhir@selfmade.ninja","9999999999")){
//     echo("SUCCESS test");
// }else{
//     echo("fail");
// }
if(signup("test1","password1","test1@example.com","9898941235"))  {
        echo "SUCCESSS "  ;
    }
else
    {
    echo "fail";
    }
$mic1 = new Mic('rodarious');// constructing the object.
$mic2 = new Mic('scullcandy');// constructing the object.
$mic3 = new Mic('hyper');

$mic1->model ="RODA";
$mic2->model ="REDGEAR";
$mic3->model ="saas";
$mic1->setlight("white");
printf($mic1->light);
echo "\n";

$mic3->setmodel("mic3genz");
print("THE MODEL OF THE 3rd MIC IS ".$mic3->getModelProxy());
echo "\n";

print("\n".$mic2->getbrand()); //present in function construct:
print("\n".$mic1->getbrand());
print("\n".$mic3->getModelProxy());


$conn = Database::getconnection();
echo "<br>";
$conn = Database::getconnection();

?>
</pre>