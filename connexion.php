<?php
 session_start();

 //verification des champs
    if(!empty($_POST['email']) &&!empty($_POST['passe']) ){
 
   $email = $_POST['email'];
   $passe = $_POST['passe'];
 
   //connexion à la base de données
 
    require_once "connecter.php";
   //selection de la table dans la bbase de donnée
    $selection ="SELECT * FROM users WHERE email='$email' && mot_de_passe='$passe' ";
    $result = mysqli_query($connexion,$selection);
 
     if(!$result){
         echo"oups une erreur c'est produit";
     }
     else{
         echo"ok";
     }
      $recupe = mysqli_fetch_assoc($result);
 
    //verification 
     if($recupe){
      $_SESSION['user_id']=$recupe['id'];
      echo "validé";
 
      header('LOCATION:./conecter/index.php');
 
     }else{
      $message="email ou mot de passe incorrecte";
     }
     // var_dump($recupe);
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
                <label for="">Email</label>
                <input type="email" name="email" id="nom">
            </div>

            <div class="group">
                <label for="">Mot de passe</label>
                <input type="password" name="passe" id="passe">
            </div>

            <input type="submit" value="Se connecter">
            <?php
            if(!empty($message)){
                echo $message;
            }
            ?>
       </form>

      </div>
     
  </div>
</body>
</html>