<?php 
require_once('./connecter.php');
$select="SELECT * FROM articles";
$requet=mysqli_query($connexion,$select);
$affiche=mysqli_fetch_all($requet,MYSQLI_ASSOC);
if($affiche){
    // var_dump($affiche);
}
?>
   


<?php require('views/page.index.php');?>