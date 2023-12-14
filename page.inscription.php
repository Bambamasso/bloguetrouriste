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
        header('LOCATION:./page.connexion.php?message=inscription est un succès ');
    
  }
   
  }
?>

<?php require('./views/inscription.php');?>