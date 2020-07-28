  
<?php 


// Variables for connection
$localhost = 'localhost';
$username = '${{secrets.DB_USERNAME}}'; 
$password = '${{secrets.DB_PASSWORD}}';
$dbname = '${{secrets.DB_NAME}}'; 

$connect = mysqli_connect($localhost, $username, $password,$dbname) or die ("Erreur de connexion : " . mysqli_connect_error());



 $connect->query("SET NAMES utf8");









?>
