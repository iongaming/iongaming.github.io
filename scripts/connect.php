<?php
 $servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "";
    $databse="lads";
    $port=3306;

$db=mysqli_connect($servername, $username, $password, $database, $port);

?>