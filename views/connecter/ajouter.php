


<?php
$ajout='./css/ajouter.css';
require('./views/include/nav.connecter.php');
?>
    <div class="article">

        <div id="content">
            <h3>Ajout d'un nouvel article</h3>
            <form action="" method="post"  enctype="multipart/form-data">
                <div class="group">
                    <label for="title">Titre de l'article</label>
                    <input type="text" name="titre" id="titre" placeholder="">
                </div>
                <div class="group">
                    <label for="img_url">Image(lien url) de l'article</label>
                    <input type="file" name="img_url" id="img_url" placeholder="">
                </div>
                <div class="group">
                    <label for="decription">Description de l'article</label>
                    <input type="text" name="description" id="decription" placeholder="">
                </div>
            
                <div class="group">
                    <label for="wcontent">Contenu de l'article</label>
                    <textarea name="contenu" id="wcontent"></textarea>
                </div>
                <?php if(!empty($message)){echo $message;}
                ?>
                <input type="submit" value="Ajouter l'article">

            </form>
            </div>
    </div>
<?php require('./views/include/footer.php');?>
