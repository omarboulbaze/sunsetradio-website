<?php 


// Variables for connection

$localhost = 'localddddhost';
$username = 'root'; 
$password = '';
$dbname = 'sunset'; 

$connect = mysqli_connect($localhost, $username, $password,$dbname) or die ("Erreur de connexion : " . mysqli_connect_error());



 $connect->query("SET NAMES utf8");









?>
