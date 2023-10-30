<?php
 session_start();
 require_once "../connecter.php";
 // echo $_SESSION['user_id'];
 if(!empty($_SESSION['user_id'])){
 $sessionUserId = $_SESSION['user_id'];
 $selection="SELECT * FROM users WHERE id='$sessionUserId'";
 
  $query=mysqli_query ($connexion,$selection);
 
  $recuperation=mysqli_fetch_assoc($query);
  if($recuperation){
     // var_dump($recuperation);
 
      if(!empty($_POST['titre']) && !empty($_POST['img_url']) && !empty($_POST['description']) && !empty($_POST['contenu'])){
 
      $titre=$_POST['titre'];
      $img_url=$_POST['img_url'];
      $description=$_POST['description'];
      $contenu=$_POST['contenu'];
     
      $insertion ="INSERT INTO articles(titre,image,description,contenu,user_id)";
      $insertion .= "VALUES('$titre', '$img_url', '$description', '$contenu', '$sessionUserId') " ;
      
       $requette=mysqli_query($connexion,$insertion);
 
      if($requette){
      $message="inserction valider";
      }
      else{echo"echec";}
 
      }
     
 
  }else{
     die("utilisateur inconnu");
  }
   }else{
     header('LOCATION:../../connexion.php');
 }
 
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="ajouter.css">
</head>
<body>
<nav>
        <a class="logo" href="">MonBogue</a>
        <ul>
            <li><a href="./index.php">tableau de bord</a></li>
            <!-- <li><a href=""></a></li> -->
            <li><a href="deconnexion.php">Deconnexion</a></li>
            <!-- <form action="" method="post">
      
            </form>
            <li><a href="inscription.php" class="inscription">Inscription</a></li> -->
        </ul>
    </nav>


    <div class="article">

    <div id="content">
            <h3>Ajout d'un nouvel article</h3>
            <form action="" method="post">
                <div class="group">
                    <label for="title">Titre de l'article</label>
                    <input type="text" name="titre" id="titre" placeholder="">
                </div>
                <div class="group">
                    <label for="img_url">Image(lien url) de l'article</label>
                    <input type="text" name="img_url" id="img_url" placeholder="">
                </div>
                <div class="group">
                    <label for="decription">Description de l'article</label>
                    <input type="text" name="description" id="decription" placeholder="">
                </div>
               
                <div class="group">
                    <label for="wcontent">Contenu de l'article</label>
                    <textarea name="contenu" id="wcontent"></textarea>
                </div>
                <?php if(!empty($message)){echo $message;}
                ?>
                <input type="submit" value="Ajouter l'article">

            </form>
        </div>
    </div>

</body>
</html>