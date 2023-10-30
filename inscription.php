<?php
 function escape($valeur){
    return trim(strip_tags($valeur));
}

  //on verifie si les champs ne sont pas vides
  if(!empty($_POST['nom'])  && !empty($_POST['prenom']) && !empty($_POST['numero']) && !empty($_POST['email']) && !empty($_POST['passe'])){

    //recuperation des données dans les variable
   $nom =escape($_POST['nom']);
   $prenom =escape($_POST['prenom']);
   $numero =escape($_POST['numero']);
   $email =escape($_POST['email']);
   $passe =escape($_POST['passe']);

   if(empty($nom) or strlen($nom)<2){
    $err_nom="Erreur sur le nom";
   }

   if(empty($prenom) or strlen( $prenom)<2){
    $err_prenom="Erreur sur le lastname";
   }

   if(empty($numero) or strlen($numero)<2){
    $err_numero="Erreur sur le email";
   }

   if(empty($email) or strlen($email)<2){
    $err_email="Erreur sur le email";
   }

   
   if(empty($passe) or strlen($passe)<2){
    $err_passe="Erreur sur le mot passe";
   }

  //connexion à la base de donnée
  if(!isset($err_nom) && !isset($err_prenom)&& !isset($err_numero)&& !isset($err_email) && !isset($err_passe)){

     require_once "connecter.php";

  //insertion des données dans la base de donnée
   
        $result = "INSERT INTO users(nom,prenom,numero,email,mot_de_passe)";
        $result .= "VALUES('$nom','$prenom','$numero','$email','$passe')"; 
        $query = mysqli_query($connexion,$result);
    
        if($query){
            echo "insertion valide !";
        }
        header('LOCATION:./connexion.php');
    
  }
   
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="./css/inscription.css">
</head>
<body>

<div>
        <nav>
        <a class="logo" href="">MonBogue</a>
        <ul>
            <li><a href="./index.php">Accueil</a></li>
            <!-- <li><a href=""></a></li> -->
            <li><a href="connexion.php">Connexion</a></li>
            <form action="" method="post">
                <!-- <input type="search" name="search" id="search" placeholder="rechercher"> -->
            </form>
            <li><a href="inscription.php" class="inscription">Inscription</a></li>
        </ul>
        </nav>
     </div>
    
  <div class="inscription">
      <div class="contenu">
       <form action="" method="post">
            <div class="group">
                <label for="">Nom</label>
                <input type="text" name="nom" id="nom">
            </div>

            <div class="group">
                <label for="">Prenom</label>
                <input type="text" name="prenom" id="prenom">
            </div>

            <div class="group">
                <label for="">Numero</label>
                <input type="number" name="numero" id="numero">
            </div>

            <div class="group">
                <label for="">Email</label>
                <input type="email" name="email" id="email">
            </div>

            <div class="group">
                <label for="">Mot de passe</label>
                <input type="password" name="passe" id="passe">
            </div>
            <input type="submit" value="S'inscrire">
       </form>

      </div>
     
  </div>
     
</body>
</html>