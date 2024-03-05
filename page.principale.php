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
       
  //    var_dump($recuperation);
  
  }
 }else{
     header('LOCATION:./page.connexion.php');
 }

 $select="SELECT articles. *,COUNT(commentaire.id) AS nb_commentaire FROM articles
 LEFT JOIN commentaire ON articles.id=commentaire.id_article GROUP BY articles.id";
 $requet=mysqli_query($connexion,$select);
 $affiche=mysqli_fetch_all($requet,MYSQLI_ASSOC);
//  var_dump($affiche);
//  if ($affiche !== null) {
//    // Vérifiez si la clé "id" existe dans le tableau
//     foreach($affiche as $value)

//        // Accédez à la valeur de la clé "id"
//        $id_value = $value["id"];
//        // echo "La valeur de id est : $id_value";
         
      
//             $nb_panier = mysqli_fetch_assoc($nb_query);
//           $nb_panier = $nb_panier['total'];
//           var_dump( $nb_panier);
      


   
// } 
// else {
//    echo "\$affiche n'est pas défini ou est NULL.";
// }

  

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

 
require('./views/connecter/accueil.php');
?>