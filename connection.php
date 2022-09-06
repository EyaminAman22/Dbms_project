<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbemail="root";
$dbname="login";

if(  !$connect= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))  {
    die("Connection failed!!");
}


?>