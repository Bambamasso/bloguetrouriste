<?php
   session_start();
  require_once "./connecter.php";
   // echo $_SESSION['user_id'];
   if(!empty($_SESSION['user_id'])){
   $sessionUserId = $_SESSION['user_id'];
   $selection="SELECT * FROM users WHERE id='$sessionUserId' ";
   
    $query=mysqli_query ($connexion,$selection);
    $recuperation=mysqli_fetch_assoc($query);
    if($recuperation){
         
    //    var_dump($recuperation);
   
       $articles = "SELECT * FROM articles WHERE user_id='$sessionUserId'";
   
       $query2=mysqli_query ($connexion,$articles);
       $userArticle=mysqli_fetch_all($query2,MYSQLI_ASSOC);
   
       if($userArticle){
        //    var_dump($userArticle);
       }else{
        //    echo"jbnjkn";
       }
        
    }else{
       die("utilisateur inconnu");
    }
   }else{
       header('LOCATION:./page.connexion.php');
   }
   
?>

<?php require('./views/connecter/index.php');?>