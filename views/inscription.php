
<?php
 $conect='./css/inscription.css';
 require('./views/include/nav.php'); ?>

    
  <div class="inscription">
      <div class="contenu">
       <form action="" method="post">
            <div class="group">
                <label for="">Nom</label>
                <input type="text" name="nom" id="nom">
            </div>

            <div class="group">
                <label for="">Prenom</label>
                <input type="text" name="prenom" id="prenom">
            </div>

            <div class="group">
                <label for="">Numero</label>
                <input type="number" name="numero" id="numero">
            </div>

            <div class="group">
                <label for="">Email</label>
                <input type="email" name="email" id="email">
            </div>

            <div class="group">
                <label for="">Mot de passe</label>
                <input type="password" name="passe" id="passe">
            </div>
            <input type="submit" value="S'inscrire">
       </form>

      </div>
     
  </div>
     

