<?php
 session_start();
 require_once "./connecter.php";
 // echo $_SESSION['user_id'];
 if(!empty($_SESSION['user_id'])){
 $sessionUserId = $_SESSION['user_id'];
 $selection="SELECT * FROM users WHERE id='$sessionUserId'";
 
  $query=mysqli_query ($connexion,$selection);
 
  $recuperation=mysqli_fetch_assoc($query);
  if($recuperation){
     // var_dump($recuperation);
 
      if(!empty($_POST['titre']) && !empty($_FILES['img_url']) && !empty($_POST['description']) && !empty($_POST['contenu'])){
 
      //recuperation du nom de l'image
      $img_url=$_FILES['img_url']['name'];
  //nom temporaire
      $tmp_nom=$_FILES['img_url']['tmp_name'];
      //on récupère l'heure actuelle
      $time=time();
  //on renome l'image en utlisant cette formule:heure+nom de l'image(pour avoir des imges) 
      $nouveau_nom_img=$time.$img_url;
     //on déplace l'image dans un dossier appellé "image"
     $deplace_img=move_uploaded_file($tmp_nom, "image/".$nouveau_nom_img);

    if($deplace_img){
      $titre=$_POST['titre'];
      $description=$_POST['description'];
      $contenu=$_POST['contenu'];

      $insertion ="INSERT INTO articles(titre,image,description,contenu,user_id) VALUES(?,?,?,?,?)";
      // $insertion .= "VALUES('$titre', '$nouveau_nom_img', '$description', '$contenu', '$sessionUserId') " ;
       $stm=mysqli_prepare($connexion, $insertion);
       $query=mysqli_stmt_bind_param($stm,'ssssi',$titre,$nouveau_nom_img,$description, $contenu,$sessionUserId);
       mysqli_stmt_execute($stm);

      //  $requette=mysqli_query($connexion,$insertion);
 
      if(mysqli_affected_rows($connexion)>0){
      $message="inserction valider";
      }
      else{echo"echec";}
 

    }else{
  echo'veillez choisir un autre fichier';
    }
     
   
      }
     
 
  }else{
     die("utilisateur inconnu");
  }
   }else{
    //  header('LOCATION:../../connexion.php');
 }
 
 ?>
<?php
require('./views/connecter/ajouter.php');
?>