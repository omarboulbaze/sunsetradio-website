<?php include './database/db.php'?>
<html>

<head>

<meta charset="utf-8" />

<!-- Google Analytics for stats only -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-E8KR9F8F1P"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-E8KR9F8F1P');
</script>

<!-- OG META -->
<meta property="og:site_name" content="www.sunsetradio.me">
<meta property="og:url" content="https://www.sunsetradio.me/">
<meta property="og:title" content="Sunset Radio">
<meta property="og:description" content="Sunset Radio, LA radio de la communauté ! Rejoignez la communauté sur Discord et intéragissez avec les animateurs EN DIRECT !">
<meta property="og:type" content="website">
<meta name="og:image" content="https://i.imgur.com/DwtzhmQ.png">

<!-- STYLES -->
<link rel="stylesheet" type="text/css" href="./abootstrap/bootstrap.min.css"/>
<link href="./afontawesome/css/all.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="./style/style.css"/>

<!-- FAVICON -->
<link rel="shortcut icon" type="image/png" href="https://i.imgur.com/DwtzhmQ.png"/>

<!-- FONTS -->
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

<!-- TITLE -->
<title>Sunset Radio - City Mode</title>
<meta name="keywords" content="sunsetradio, sunset radio, habbocity, habbo city, rétro, rétro habbo, webradio, radio habbo, radio fr, france" />
<meta name="description" content="Sunset Radio est une radio communautaire française" />
  

</head>

 <!-- NAV BAR -->
 <nav class="navbar navbar-expand-lg barreNavSRcity big navbar-dark bg-dark pointer">
 
 <a class="navbar-brand" href="index.php">

   <img src="./image/srLogoTransparentBlack.png" class="status" width="75" height="75" alt="SunsetRadio" loading="lazy">
 </a>
 

 <div class="collapse navbar-collapse" id="navbarSupportedContent">
   <ul class="navbar-nav">
    
   
   <li class="nav-item pl-5" id="page-home">
       <a class="nav-link colorSRcity active" >Accueil</a>
     </li>

    

     <li class="nav-item">
       <a class="nav-link pl-5 colorSRcity">Flux</a>
     </li>


     <li class="nav-item">
       <a class="nav-link pl-5 colorSRcity" >Articles</a>
     </li>

     

     <li class="nav-item">
       <a class="nav-link pl-5 colorSRcity">Organisations</a>
     </li>

     <li class="nav-item">
       <a class="nav-link pl-5 colorSRcity" >Membres</a>
     </li>


     <li class="nav-item" id="page-classement">
       <a class="nav-link pl-5 colorSRcity">Classement</a>
     </li>
     
     <!--
     <li class="nav-item dropdown pl-5 ">
        <a class="nav-link dropdown-toggle colorSRcity" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          TOP
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Organisations</a>
          <a class="dropdown-item" href="#">Membres</a>
         
        </div>
      </li>
-->
     
   </ul>

 </div>
 <a href="./index.php"><button class="btn btn-outline-dark my-2 my-sm-0 big colorSRcity mx-1"><i class="fas fa-home"></i> Revenir au mode classique</button></a>

 

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>

 

</nav>
 <!-- NAV BAR END -->

  <body>
   

   <!-- CONTAINER -->
  <div class="container">



  <!-- LIST GROUP -->
  <div class="list-group my-5">

 <?php

$sql = "SELECT * FROM flux ORDER BY id DESC";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
 
 
  while($row = $result->fetch_assoc()) {

    $server_id = $row['server_id'];
    $server_name = $row['server_name'];
    $server_hash = $row['server_hash'];
    $type = $row['type'];
    $pseudo = $row['pseudo'];
    $info = $row['info'];
    $timestamp = $row['timestamp'];

    if($type == "success"){
      echo '<div class="list-group-item list-group-item-action list-group-item-'.$type.' flux-item pointer">
      <img src="https://api.habbocity.me/avatar_image.php?user='.$pseudo.'&headonly=1&head_direction=2&size=l" class="status flux-head">
      <b>'.$pseudo.'</b> est désormais <b>'.$info.'</b> dans <b>'.$server_name.'</b>
      <img src="https://cdn.discordapp.com/icons/'.$server_id.'/'.$server_hash.'.png" class="status flux-orga">
      <p class="text-muted">'.time_spent($timestamp).'</p>
      </div>';
    } else if ($type == "danger") {
      echo '<div class="list-group-item list-group-item-action list-group-item-'.$type.' flux-item pointer">
      <img src="https://api.habbocity.me/avatar_image.php?user='.$pseudo.'&headonly=1&head_direction=2&size=l" class="status flux-head">
      <b>'.$pseudo.'</b> n\'est plus <b>'.$info.'</b> dans <b>'.$server_name.'</b>
      <img src="https://cdn.discordapp.com/icons/'.$server_id.'/'.$server_hash.'.png" class="status flux-orga">
      <p class="text-muted">'.time_spent($timestamp).'</p>
      </div>';
    } else if ($type == "info") {
      echo '<div class="list-group-item list-group-item-action list-group-item-'.$type.' flux-item pointer">
      <img src="https://api.habbocity.me/avatar_image.php?user='.$pseudo.'&headonly=1&head_direction=2&size=l" class="status flux-head">
      <b>'.$pseudo.'</b> a été promu(e) <b>'.$info.'</b> dans <b>'.$server_name.'</b>
      <img src="https://cdn.discordapp.com/icons/'.$server_id.'/'.$server_hash.'.png" class="status flux-orga">
      <p class="text-muted">'.time_spent($timestamp).'</p>
      </div>';
    }else if ($type == "dark") {
      echo '<div class="list-group-item list-group-item-action list-group-item-'.$type.' flux-item pointer">
      <img src="https://api.habbocity.me/avatar_image.php?user='.$pseudo.'&headonly=1&head_direction=2&size=l" class="status flux-head">
      <b>'.$pseudo.'</b>  a été viré(e) pour <b>'.$info.'</b> dans <b>'.$server_name.'</b>
      <img src="https://cdn.discordapp.com/icons/'.$server_id.'/'.$server_hash.'.png" class="status flux-orga">
      <p class="text-muted">'.time_spent($timestamp).'</p>
      </div>';
    }else if ($type == "warning") {
      echo '<div class="list-group-item list-group-item-action list-group-item-'.$type.' flux-item pointer">
      <img src="https://api.habbocity.me/avatar_image.php?user='.$pseudo.'&headonly=1&head_direction=2&size=l" class="status flux-head">
      <b>'.$pseudo.'</b> a reçu un avertissement pour <b>'.$info.'</b> dans <b>'.$server_name.'</b>
      <img src="https://cdn.discordapp.com/icons/'.$server_id.'/'.$server_hash.'.png" class="status flux-orga">
      <p class="text-muted">'.time_spent($timestamp).'</p>
      </div>';
    }
    
   
  }
 
} else {
  echo "<h1 class=text-center>Aucun flux n'est disponible pour l'instant</h1>";
}
$conn->close();

?>

<!--
<div class="list-group-item list-group-item-action list-group-item-danger flux-item pointer">
<img src="https://api.habbocity.me/avatar_image.php?user=Jasown&headonly=1&head_direction=2&size=l" class="status flux-head">
<b>Jasown</b> a démissionné de son poste de <b>Graphiste</b> dans <b>Draft City</b>
<img src=" https://cdn.discordapp.com/icons/454965140329070603/a_db5b3ffeb64ab86ffb91b3772a62da3c.gif?size=2048" class="status flux-orga">
<p class="text-muted">Il y a quelques secondes</p>
</div>

<div class="list-group-item list-group-item-action list-group-item-warning flux-item pointer">
<img src="https://api.habbocity.me/avatar_image.php?user=Jason&headonly=1&head_direction=2&size=l" class="status flux-head">
<b>Adrien</b> a reçu un avertissement pour <b>Inactivité</b> dans <b>Draft City</b>
<img src=" https://cdn.discordapp.com/icons/447398074470629416/a_bb7324b82c52c7df62fad4901a0dd57e.gif?size=2048" class="status flux-orga">
<p class="text-muted">Il y a 2 minutes</p>
</div>

<div class="list-group-item list-group-item-action list-group-item-info flux-item pointer">
<img src="https://api.habbocity.me/avatar_image.php?user=Marie&headonly=1&head_direction=2&size=l" class="status flux-head">
<b>Marie</b> a été promu(e) <b>Responnsable Création</b> dans <b>Draft City</b>
<img src=" https://cdn.discordapp.com/icons/452416963944251393/1888eb15ee8a63b609f21a16c9cfe777.png?size=2048" class="status flux-orga">
<p class="text-muted">Il y a 12 minutes</p>
</div>

<div class="list-group-item list-group-item-action list-group-item-dark flux-item pointer">
<img src="https://api.habbocity.me/avatar_image.php?user=Antoine&headonly=1&head_direction=2&size=l" class="status flux-head">
<b>Antoine</b> a été viré(e) pour <b>Manque de respect</b> dans <b>Draft City</b>
<img src=" https://cdn.discordapp.com/icons/569705245450436638/a_6df6966315a82dd5c47d246d2537b738.gif?size=2048" class="status flux-orga">
<p class="text-muted">Il y a 35 minutes</p>
</div>

<div class="list-group-item list-group-item-action list-group-item-success flux-item pointer">
<img src="https://api.habbocity.me/avatar_image.php?user=Jasown&headonly=1&head_direction=2&size=l" class="status flux-head">
<b>Jasown</b> est désormais <b>Graphiste</b> dans <b>Draft City</b>
<img src=" https://images-ext-2.discordapp.net/external/_qd72n8JVKtttOflPtQgFKNcDhtYCDz_1xA0MYXaJqY/%3Fsize%3D2048/https/cdn.discordapp.com/icons/450726629795168260/5996cd9cc850d180d9739828192a2519.png" class="status flux-orga">
<p class="text-muted">Il y a 2 jours</p>
</div>
 -->

</div>
 <!-- /LIST GROUP -->


  </div>
   <!-- /CONTAINER -->



<div class="music-toggle">
<i class="fas fa-music"></i>
</div>

<div class="radio-toggle">
<div class="times">
<i class="fas fa-times"></i>
</div>
<iframe src="https://www.radioking.com/widgets/player/player.php?id=330331&c=%23FFB451&c2=%2354462E&f=h&i=0&ii=null&p=1&s=0&li=1&popup=0&plc=0&h=undefined&l=100&a=0&v=2&fullsize" style="border-radius: 5px; width: 30%; height: 145px; min-width: 470px; min-height: 0; " frameBorder="0" ></iframe>
</div>
<!-- Javascript -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="./script/script.js"></script>

</body>
</html>
