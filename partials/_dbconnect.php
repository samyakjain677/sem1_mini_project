<?php 

$username = "root";
$password = "h1h2h3h4";
$host ="localhost";
$database = "nitk";
$link = mysqli_connect($host,$username,$password,$database);

if(!$link)
{
    die("Error :". mysqli_connect_error());
}
?>