
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
    // var_dump($recuperation);
 }else{
    die("utilisateur inconnu");
 }

}else{
    header('LOCATION:../connexion.php');
}
if(!empty($_GET['id'])){

    $id=$_GET['id'];
    $selection="SELECT * FROM articles WHERE id='$id' AND user_id='$sessionUserId'";
    $requete=mysqli_query($connexion,$selection);

    if($requete){
        $article= mysqli_fetch_assoc($requete);
        // var_dump($article);
        if(!$article){
           header('LOCATION:index.php') ;
        }
    }else{
        die("oups une erreur c'est produit");
    }

    if(!empty($_POST['titre']) && !empty($_FILES['img_url']) && !empty($_POST['description'])  && !empty($_POST['contenu'])){
        
        $img_url=$_FILES['img_url'];
        $img_url=$_FILES['img_url']['name'];
        //nom temporaire
            $tmp_nom=$_FILES['img_url']['tmp_name'];
            //on récupère l'heure actuelle
            $time=time();
        //on renome l'image en utlisant cette formule:heure+nom de l'image(pour avoir des imges) 
            $nouveau_nom_img=$time.$img_url;
           //on déplace l'image dans un dossier appellé "image"
           $deplace_img=move_uploaded_file($tmp_nom, "image/".$nouveau_nom_img);

            $titre=$_POST['titre'];
            $description=$_POST['description'];
            $contenu=$_POST['contenu'];
          
            $insertion ="UPDATE articles SET titre= '$titre', image='$nouveau_nom_img',description= ' $description' , contenu= '$contenu' WHERE id='$id' ";
           
             $requette=mysqli_query($connexion,$insertion);
       
            if($requette){
            $selection="SELECT * FROM articles WHERE id='$id' AND user_id='$sessionUserId'";
           $requete=mysqli_query($connexion,$selection);
           $article= mysqli_fetch_assoc($requete);
           //var_dump($article);
            // echo"modification validé";
            $valid="modification validé";
            }
          else{die( "echec");}
       
        }
}

?>
<!--appelation de la vue  -->
<?php require('./views/connecter/modifier.php');?>