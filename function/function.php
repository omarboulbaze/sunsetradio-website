<?php

include "connection.php";

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 




if (isset ($_POST["enter"]))
{
	$name =$_POST["name"];
	$mdp =$_POST["mdp"];
	
    
	$select = mysqli_query($connect,"select * from users where name='$name' and mdp='$mdp';") or die
	("Erreur de selection");
    
    
    
    $row = mysqli_fetch_row($select);
   
    
        if(@$row == null){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Le mot de passe que vous avez fourni est incorrect, merci de <b>réessayer</b>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        //echo "<div class='alert alert-danger text-center'>Le mot de passe que vous avez fourni est incorrect, merci de <b>réessayer</b>.</div>";
    } else {
            $_SESSION["id"] = $row[0];
        $_SESSION["name"] = $row[1];
        $_SESSION["mdp"] = $row[2];
          
           
                 echo '<script>window.location.href = "staff.php"</script>';
           
       
       
    }
        
} 



?>