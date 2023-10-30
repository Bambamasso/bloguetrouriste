<?php
session_start();
require_once "../connecter.php";
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

    if(!empty($_POST['titre']) && !empty($_POST['img_url']) && !empty($_POST['description'])  && !empty($_POST['contenu'])){
        $titre=$_POST['titre'];
        $img_url=$_POST['img_url'];
        $description=$_POST['description'];
        $contenu=$_POST['contenu'];
      
        $insertion ="UPDATE articles SET titre= '$titre', image='$img_url',description= ' $description' , contenu= '$contenu' WHERE id='$id' ";
       
         $requette=mysqli_query($connexion,$insertion);
   
        if($requette){
            $selection="SELECT * FROM articles WHERE id='$id' AND user_id='$sessionUserId'";
       $requete=mysqli_query($connexion,$selection);
       $article= mysqli_fetch_assoc($requete);
    //   var_dump($article);
        // echo"modification validé";
        $valid="modification validé";
        }
      else{die( "echec");}
   
        }
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
            <h3>Modifier l'article</h3>
            <form action="" method="post">
                <div class="group">
                    <label for="title">Titre de l'article</label>
                    <input type="text" name="titre" id="titre" placeholder="" value="<?php echo $article ['titre']?>">
                </div>
                <div class="group">
                    <label for="img_url">Image(lien url) de l'article</label>
                    <input type="text" name="img_url" id="img_url" placeholder="" value="<?php echo $article ['image']?>">
                </div>
                <div class="group">
                    <label for="decription">Description de l'article</label>
                    <input type="text" name="description" id="decription" placeholder="" value="<?php echo $article ['description']?>">
                </div>
               
                <div class="group">
                    <label for="wcontent">Contenu de l'article</label>
                    <textarea name="contenu" id="wcontent" ><?php echo $article ['contenu']?></textarea>
                </div>
                <?php if(!empty($valid)){echo $valid;}
                ?>
                <input type="submit" value="Ajouter l'article">

            </form>
        </div>
    </div>

</body>
</html>
