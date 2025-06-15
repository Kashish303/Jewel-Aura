<?php
session_start();
error_reporting(0);
$siteURl = 'http://'.$_SERVER['HTTP_HOST'].'/project';
$SiteTitle = "Welcome to our project";

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'project_db';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$conn){
	die('Database Connection Error!');
}




?>