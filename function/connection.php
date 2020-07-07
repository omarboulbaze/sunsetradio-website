<?php 


// Variables for connection

$localhost = 'localhost';
$username = 'sunsetra_sunset'; 
$password = ''; //rg^EchG^4N7A
$dbname = 'sunsetra_sunset'; 

$connect = mysqli_connect($localhost, $username, $password,$dbname) or die ("Erreur de connexion : " . mysqli_connect_error());



 $connect->query("SET NAMES utf8");









?>