<?php 
$voir='./css/voir.css';
require('./views/include/nav.php');
?>
 

 <section>
  <div class="content">

    <h1><?php echo $affiche['titre']?></h1>
    <div class="image"><img src="./image/<?php echo $affiche['image'];?> " alt="" width="70%"  height=" 5%"></div>
    <p><?php echo $affiche['contenu']?></p>
  </div>
 </section>
<?php require('./views/include/footer.php');?>