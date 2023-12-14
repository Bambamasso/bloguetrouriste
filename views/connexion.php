<?php
 
?>

 
<?php 
 $conect='./css/inscription.css';
require('./views/include/nav.php'); 
?>
  
  <div class="inscription">
      <div class="contenu">
       <form action="" method="post">
            <div class="group">
                <label for="">Email</label>
                <input type="email" name="email" id="nom">
            </div>

            <div class="group">
                <label for="">Mot de passe</label>
                <input type="password" name="passe" id="passe">
            </div>

            <input type="submit" value="Se connecter">
            <?php
            if(!empty($message)){
                echo $message;
            }
            ?>
       </form>

      </div>
     
  </div>
</body>
</html>