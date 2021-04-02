<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "project_db";


if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	die("failed to connect!");
}
//kanang 'project_db ilisi lang sa database name nami nga naa sa imo g name sa localhost/phpmyadmin/'
?>