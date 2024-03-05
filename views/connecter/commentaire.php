<?php 
$voir='./css/voir.css';
require('./views/include/nav.connecter.php');
?>
 

 <section>
  <div class="content">

    <h1><?php echo $aff['titre']?></h1>
    <div class="image"><img src="./image/<?php echo $aff['image'];?> " alt="" width="70%"  height=" 5%"></div>
    <p><?php echo $aff['contenu']?></p>
  </div>
 </section>

 <div class="boite">
    <p>Commentaire</p>
    <!-- <hr> -->
    <div class="commentaire">

    <form action="" method="post">
            <input type="text" name='cmt'>
            <input type="submit" value="Envoyer">
      </form>

    </div>
     <div class="comt">
     <table>
    <tbody>
     <?php foreach($commentaire as $value):?>
      
          <p><?php $value['user_id'] ?></p>

          <?php foreach ($post as $values): ?>

          <?php  if( $resul=($value['user_id'] == $values['id'])):?>
          
           <tr>
        
             <td> De <?php echo  $values['nom'].' '.$values['prenom'];?></td>
             <td> <?php echo $value['commentaire']?></td> 
           </tr>
       
         
       
        <?php endif; ?>
        <?php endforeach; ?>

      <?php endforeach?> 
    </tbody>
    </table>
     </div>
 </div>
<?php require('./views/include/footer.php');?>