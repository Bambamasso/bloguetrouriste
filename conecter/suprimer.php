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
    header('LOCATION:../../connexion.php');
}

if($_GET['id']){
    $id= $_GET['id'];
    $rox = "DELETE  FROM articles WHERE id='$id' ";
    $execute = mysqli_query($connexion,$rox);
    if($execute){
        echo "suppression actualisé";
        header('LOCATION:index.php');
    }else{
        echo "erreur ";
    }
}

?>