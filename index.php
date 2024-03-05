<?php 
require_once('./connecter.php');
$select="SELECT * FROM articles LIMIT 8";
$requet=mysqli_query($connexion,$select);
$affiche=mysqli_fetch_all($requet,MYSQLI_ASSOC);

// 

if($affiche){
    //  var_dump($affiche);
    
}
$user="SELECT * FROM users";
 $query=mysqli_query($connexion,$user);
 
 if($query){
    $post=mysqli_fetch_all($query,MYSQLI_ASSOC);
    // var_dump($post);
 }else{
    echo('rien');
 }
?>
   


<?php require('views/page.index.php');?>