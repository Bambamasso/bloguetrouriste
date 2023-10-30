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
         
    //    var_dump($recuperation);
   
       $articles = "SELECT * FROM articles WHERE user_id='$sessionUserId'";
   
       $query2=mysqli_query ($connexion,$articles);
       $userArticle=mysqli_fetch_all($query2,MYSQLI_ASSOC);
   
       if($userArticle){
        //    var_dump($userArticle);
       }else{
           echo"jbnjkn";
       }
        
    }else{
       die("utilisateur inconnu");
    }
   }else{
       header('LOCATION:../connexion.php');
   }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="./accueil.css">
</head>
<body>
    
<div>
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
   

       <div class="poste">
       
       <div id="content">
       <p>Bienvenu <?php echo $recuperation['prenom']; ?> sur votre espace.
       Vous pouvez ajouter des articles sur le blogue
    </p>
            <h1>Mes Articles</h1>
            <a href="ajouter.php" class="btn">Ajouter un article</a>
            <table>
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>contenu</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                 <?php foreach ($userArticle as $value):?>
                    <tr>
                        
                        <td><?php echo $value['titre']?></td>
                        <td><img src="<?php echo $value['image']?>" alt="image" width="150px"></td>
                        <td><?php echo $value['description']?></td>
                        <td><?php echo $value['contenu']?></td>
                        <td><?php echo $value['date']?></td>
                        <td><div class="action"><a href="./suprimer.php?id=<?php echo $value['id']?>">Suprimer</a> <a href="./modifier.php?id=<?php echo $value['id']?>">Modifier</a></div></td>
                    </tr>
                 <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>