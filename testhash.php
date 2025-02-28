<?php
$pass= isset($_GET['pass']) ? $_GET['pass'] : "randompass";
echo(md5($pass));

echo "<br>";

$data = "hello";



foreach (hash_algos() as $v) {

        $r = hash($v, $data, false);

        printf("%-15s %3d %s \n ", $v, strlen($r), $r);

}

?>