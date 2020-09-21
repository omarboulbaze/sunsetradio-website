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
<link rel="shortcut icon" type="image/png" href="https://imgur.com/N0ifElZ.png"/>
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

   <img src="https://imgur.com/1bGsAjs.png" class="status" width="75" height="75" alt="SunsetRadio" loading="lazy">
 </a>
 

 <div class="collapse navbar-collapse" id="navbarSupportedContent">
   <ul class="navbar-nav">
    
   

    
     <li class="nav-item active-ajax" id="page-news">
       <a class="nav-link pl-5 colorSRcity" >News</a>
     </li>


     <li class="nav-item" id="page-flux">
       <a class="nav-link pl-5 colorSRcity">Flux</a>
     </li>





     <li class="nav-item" id="page-classement">
       <a class="nav-link pl-5 colorSRcity">Classement</a>
     </li>
     
   
   </ul>

 </div>
 <a href="./index.php"><button class="btn btn-outline-dark my-2 my-sm-0 big colorSRcity mx-1"><i class="fas fa-home"></i> Revenir au mode classique</button></a>

 

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>

 

</nav>
 <!-- NAV BAR END -->

  <body>
   
  <div class="container">











 
<div class="mt-5">


      <div onclick="goBack()" class="goBack pointer"><i class="fas fa-arrow-left"></i></div>


      <div class="btn-group" role="group" aria-label="Basic example">
  <button id="btn-anim" type="button" class="btn btn-light btn-graphiste"><i class="fas fa-gift"></i> Animateurs</button>
  <button type="button" class="btn btn-light btn-videaste"><i class="fas fa-home"></i> Architectes</button>
  <button type="button" class="btn btn-light btn-dessinateur"><i class="fas fa-paint-brush"></i> Dessinateurs</button>
  <button type="button" class="btn btn-light btn-pixelartiste"><i class="fas fa-cog"></i> Développeur</button>
  <button type="button" class="btn btn-light btn-redacteur"><i class="fas fa-palette"></i> Graphistes</button>
  <button type="button" class="btn btn-light btn-animateur"><i class="fas fa-pen"></i> Rédacteurs</button>
  <button type="button" class="btn btn-light btn-architecte"><i class="fas fa-video"></i> Vidéastes</button>
</div>


    <h2>Classement par pôles</h2>
    
</div>



<?php

$sql = "SELECT * FROM player ORDER BY vote DESC";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
 
 $count = 1;
  while($row = $result->fetch_assoc()) {

    $pseudo = $row['pseudo'];
    $role = $row['role'];
    $orga = $row['orga'];
    $vote = $row['vote'];
    
    

    if($vote > 1){
      $word = "votes";
    }else{
      $word = "vote";
    }

    if($role == "Animateur"){
      $icon = '<i class="fas fa-gift"></i>'; 
    }else if($role == "Architecte"){
      $icon = '<i class="fas fa-home"></i>'; 
    }else if($role == "Dessinateur"){
      $icon = '<i class="fas fa-paint-brush"></i>'; 
    }else if($role == "Développeur"){
      $icon = '<i class="fas fa-cog"></i>'; 
    }else if($role == "Graphiste"){
      $icon = '<i class="fas fa-palette"></i>'; 
    }else if($role == "Rédacteur"){
      $icon = '<i class="fas fa-pen"></i>'; 
    }else if($role == "Vidéaste"){
      $icon = '<i class="fas fa-video"></i>'; 
    }

    echo '<!-- MEMBRE ITEM -->
    <div id="coliss" class="d-flex  flex-row poles-item  mb-3 row status">
    <div class="big text-center  m-auto" style="width:2rem;">'.$count.'</div>
    <div class="vl"></div>
    <img src="https://api.habbocity.me/avatar_image.php?user='.$pseudo.'&headonly=1&head_direction=2&size=l" class="px-5 poles-head status">
    <div class="big my-auto" style="width:15rem;">'.$pseudo.'</div>
    <div class="vl"></div>
    <div class="big px-1  m-auto" style="width:12rem;">'.$icon.' '.$role.'</div>
    <div class="vl"></div>
    
    <div class="big px-1 m-auto"  style="width:12rem;"><i class="fas fa-star" style="color:#e0ba5a"></i> '.$orga.'</div>
    <div class="vl"></div>
    <div class="big px-1  m-auto"  style="width:12rem;"><i class="fas fa-check"  style="color:#a0d99c;"></i> '.$vote.' '.$word.'</div>
    
    </div>
    <!-- MEMBRE END -->';
    
   $count++;
  }
 
} else {
  echo "<h1 class=text-center>Aucun flux n'est disponible pour l'instant</h1>";
}
$conn->close();

?>






















  </div>
 



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
