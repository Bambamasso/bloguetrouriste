<?php
$nav='./css/stylenav.css';
require('./views/include/nav.php');
?>

<div class="container">
  <div class="slider">
    <div class="slide">
      <h1>slide1</h1>
    </div>
    <div class="slide">
       <h1>slide2</h1>
    </div>
    <div class="slide">
      <h1>slide3</h1>
    </div>
    <div class="slide">
      <h1>slide4</h1>
    </div>
    <div class="slide">
      <h1>slide1</h1>
    </div> 
    <!-- <div class="slide">
        <h1>slide6</h1>
    </div> -->
  </div>
</div>

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

             <img src="./image/<?php echo $value['image'];?>" alt="" width="280px">
             <h3><a href="./page.voir.php?plus=<?php echo $value['id']; ?>"> <?php echo $value['titre']; ?></h3></a>
             <p><?php echo $value['description']; ?></p>
           </div>
           <?php  endforeach;?>
      </div>
    </div>
       
  </section>
  <?php
require('./views/include/footer.php');
?>