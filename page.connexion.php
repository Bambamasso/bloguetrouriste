<?php
    session_start();

    if (isset($_GET['message'])) {
        echo '<script>alert("' . htmlspecialchars($_GET['message']) . '");</script>';}

 //verification des champs
    if(!empty($_POST['email']) &&!empty($_POST['passe']) ){
 
   $email = $_POST['email'];
   $passe = $_POST['passe'];
 
   //connexion à la base de données
 
    require_once ("./connecter.php");
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
 
      header('LOCATION:./page.accueil.php');
 
     }else{
      $message="email ou mot de passe incorrecte";
     }
     // var_dump($recupe);
    }
?>
 
<?php require('./views/connexion.php');?>
