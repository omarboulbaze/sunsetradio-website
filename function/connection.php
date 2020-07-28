<?php 


// Variables for connection

$localhost = 'localhost';
$username = '${{secrets.DB.USERNAME}}'; 
$password = '${{secrets.DB.PASSWORD}}';
$dbname = '${{secrets.DB.NAME}}'; 

$connect = mysqli_connect($localhost, $username, $password,$dbname) or die ("Erreur de connexion : " . mysqli_connect_error());



 $connect->query("SET NAMES utf8");









?>
