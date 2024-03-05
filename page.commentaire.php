<?php
require_once('./connecter.php');

session_start();
require_once "./connecter.php";
 // echo $_SESSION['user_id'];
 if(!empty($_SESSION['user_id'])){
 $sessionUserId = $_SESSION['user_id'];
 $selection="SELECT * FROM users WHERE id='$sessionUserId' ";
 
  $query=mysqli_query ($connexion,$selection);
  $recuperation=mysqli_fetch_assoc($query);
  if($recuperation){


}else{
    die("utilisateur inconnu");
 }
}else{
    header('LOCATION:./page.connexion.php');
}

if(!empty ($_GET['plus'])|| 
   isset($_GET['plus'])){

    $id=$_GET['plus'];
    // echo "Identifiant de l'article : " . $id;

  
      $select="SELECT * FROM articles WHERE id=?";
      $requet=mysqli_prepare($connexion,$select);
      $query=mysqli_stmt_bind_param($requet,'i',$id);
      mysqli_stmt_execute($requet);
     
      $result = mysqli_stmt_get_result($requet);

      if ($result && mysqli_num_rows($result) > 0) {
        $aff = mysqli_fetch_assoc($result);
        // var_dump($aff);
    } else {
        echo "Aucun article trouvé avec cet identifiant.";
    }

  
    if(!empty($_POST['cmt'])){
        $cmt=$_POST['cmt'];
       
       $requet="INSERT INTO commentaire(user_id,commentaire,id_article )VALUES(?,?,?)";
      $prepare=mysqli_prepare($connexion,$requet);

    //   if (!$requet) {
    //     echo 'Erreur de préparation de la requête : ' . mysqli_error($connexion);
    // }
      $result=mysqli_stmt_bind_param($prepare,"isi",$sessionUserId,$cmt,$id);
      mysqli_stmt_execute($prepare);

     if(mysqli_affected_rows($connexion)>0){
        // echo 'Le commentaire a été ajouté avec succès.';
     }else{
        // echo 'Erreur lors de l\'ajout du commentaire : ' . mysqli_error($connexion);
     }
     
   }else{
    // echo 'Erreur de préparation de la requête : ' . mysqli_error($connexion);
   }

   $joint="SELECT * FROM commentaire INNER JOIN users ON users.id = commentaire.user_id WHERE  commentaire.id_article=$id  LIMIT 11";
   $query=mysqli_query($connexion, $joint);
   if($query){
    // echo "echec";
    $commentaire=mysqli_fetch_aLL($query,MYSQLI_ASSOC);
   //  var_dump($commentaire);
   }

   $user="SELECT * FROM users ";
 $query=mysqli_query($connexion,$user);
 
 if($query){
    $post=mysqli_fetch_all($query,MYSQLI_ASSOC);
   //   var_dump($post);
 }else{
    echo('rien');
 }
} 
  
   

  

?>



<?php require('./views/connecter/commentaire.php');?>