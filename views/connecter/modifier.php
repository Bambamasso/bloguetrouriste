

<?php
$ajout='./css/ajouter.css';
 require('./views/include/nav.connecter.php');
 ?>
    <div class="article">

    <div id="content">
            <h3>Modifier l'article</h3>
            <form action="" method="post"  enctype="multipart/form-data">
                <div class="group">
                    <label for="title">Titre de l'article</label>
                    <input type="text" name="titre" id="titre" placeholder="" value="<?php echo $article ['titre']?>">
                </div>
                <div class="group">
                    <label for="img_url">Image(lien url) de l'article</label>
                    <input type="file" name="img_url" id="img_url" placeholder="" value="<?php echo $article ['image']?>">
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

<?php require('./views/include/footer.php');?>