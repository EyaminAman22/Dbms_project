<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbemail="root";
$dbname="pharmacy_management";

if(  !$connect= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))  {
    die("Connection failed!!");
}


?>