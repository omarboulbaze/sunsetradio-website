<meta charset="utf-8"/>
<?php
session_start();


// Variables for connection

$localhost = 'localhost';
$username = 'root'; //rpstorym_user
$password = ''; //qwertyuiop12345
$dbname = 'rpstory'; //rpstorym_rpstory

$connect = mysqli_connect($localhost, $username, $password,$dbname) or die ("Erreur de connexion : " . mysqli_connect_error());



 $connect->query("SET NAMES utf8");

?>

<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9RY1S8VGXQ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-9RY1S8VGXQ');
</script>
</head>




