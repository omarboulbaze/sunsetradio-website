<?php

// Variables for connection
//testing gitignore
$localhost = 'sunsetradio.me';
$username = 'sunsetra_citymode';
$password = 'w?aTRPYMJx#e';
$dbname = 'sunsetra_citymode';

$conn = mysqli_connect($localhost, $username, $password, $dbname) or die ("Erreur de connexion");


 $conn->query("SET NAMES utf8mb4");





// TODO : Comprendre le fonctionnement de cette fonction

 function time_spent($datetime, $full = false) {
date_default_timezone_set('Europe/Paris');
  $now = new DateTime;
  $ago = new DateTime($datetime);
  $diff = $now->diff($ago);

  $diff->w = floor($diff->d / 7);
  $diff->d -= $diff->w * 7;

  $string = array(
      'y' => 'année',
      'm' => 'mois',
      'w' => 'semaine',
      'd' => 'jour',
      'h' => 'heure',
      'i' => 'minute',
      's' => 'seconde',
  );
  foreach ($string as $k => &$v) {
      if ($diff->$k) {
          $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
      } else {
          unset($string[$k]);
      }
  }

  if (!$full) $string = array_slice($string, 0, 1);
  return $string ? 'Il y a ' . implode(', ', $string)  : 'Maintenant';
}
 

?>