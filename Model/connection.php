<?php
$connection = mysqli_connect('localhost', 'root', '');

if (!$connection)
{
$output = "Unable to connect to database server.";
include 'output.html.php';
exit();
}

if (!mysqli_set_charset($connection, 'utf8')){
$output = "Could not set the character set";
include 'output.html.php';
exit();
}

if (!mysqli_select_db($connection, 'acme_repair')){
$output = "Unable to connect to database.";
include 'output.html.php';
exit();
}

//$output = "Connection to database has been established.";
//include 'output.html.php';
