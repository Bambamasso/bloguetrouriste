<?php
 $nav='./css/stylenav.css';
require('views/include/nav.connecter.php') ;
?>

<section >
   
   <div class="colone">
   <h2>Articles poster</h2>
     <div class="cadres">
      
      <?php foreach($affiche as $value): ?>
          <div class="cadre">

            <p><?php  $value['user_id'];?></p>
          
            <?php foreach ($post as $values):?>
              <?php
                if($values['id']== $value['user_id']):?>
                <p class="nom"><?php echo  $values['nom'].' '.$values['prenom'];?></p>
                <p class="date"><?php echo date( 'l d F Y', strtotime($value["date"])); ?></p>
                <?php endif;?>
            <?php endforeach;?>

            <img src="./image/<?php echo $value['image'];?>" alt="" width="280px" >
            <h3>
              <a href="./page.commentaire.php?plus=<?php echo $value['id']; ?>"> <?php echo $value['titre']; ?></a>
           </h3>
            <p><?php echo $value['description']; ?></p>
           
            <hr>
            
            <a href="./page.commentaire.php?plus=<?php echo $value['id']; ?>" class="cmt">Commentaire <span>(<?php echo $value['nb_commentaire'] ?>)</span></a>
            
          
          </div>
          <?php  endforeach;?>

       

     </div>
   </div>
      
 </section>