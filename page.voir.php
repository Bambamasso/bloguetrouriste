<?php
require_once('./connecter.php');

 if(!empty ($_GET['plus']) || isset($_GET['plus'])){
  $id=$_GET['plus'];

    $select="SELECT * FROM articles WHERE id=$id";
$requet=mysqli_query($connexion,$select);
 $affiche=mysqli_fetch_assoc($requet);

 }

// 

if($affiche){
    //  var_dump($affiche);
    
}

?>



<?php require('./views/voirplus.php');?>