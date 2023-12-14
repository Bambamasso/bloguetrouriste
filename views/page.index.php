<?php
require('./views/include/nav.php');
?>

   <section >
    <?php foreach($affiche as $value): ?>
        <div class="cadres">
            <div class="cadre">
              <img src="./image/<?php echo $value['image'];?>" alt="" width="280px">
              <h3> <?php echo $value['titre']; ?></h3>
              <p><?php echo $value['description']; ?></p>
            </div>

        </div>
        <?php  endforeach;?>
   </section>
   <?php
require('./views/include/footer.php');
?>