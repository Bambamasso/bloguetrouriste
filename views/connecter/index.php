
<?php 
 $table='./css/style.css';
require('./views/include/nav.connecter.php');
?>

   

       <div class="poste">
       
       <div id="content">
       <p>Bienvenu <?php echo $recuperation['prenom']; ?> sur votre espace.
       Vous pouvez ajouter des articles sur le blogue
    </p>
            <h1>Mes Articles</h1>
            <a href="page.ajouter.php" class="btn">Ajouter un article</a>
            <?php if(!empty($userArticle)):?>
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
                        <td><img src=" ./image/<?php echo $value['image']?>" alt="image" width="150px"></td>
                        <td><?php echo $value['description']?></td>
                        <td><?php echo $value['contenu']?></td>
                        <td><?php echo $value['date']?></td>
                        <td><div class="action"><a href="./suprimer.php?id=<?php echo $value['id']?>">Suprimer</a> <a href="./page.modifier.php?id=<?php echo $value['id']?>">Modifier</a></div></td>
                    </tr>
                 <?php endforeach;?>
                </tbody>
            </table>
            <?php else :?>
               <p>Vous n'avez pas encore ajouter d'articles</p>
            <?php endif;?>
        </div>
    </div>

    <?php require('./views/include/footer.php');?>