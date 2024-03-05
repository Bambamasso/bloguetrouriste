<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="./css/navstyle.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $nav;?>">
    <link type="text/css" rel="stylesheet" href="<?php echo $table;?>">
    <link type="text/css" rel="stylesheet" href="<?php echo $ajout;?>">
    <link type="text/css" rel="stylesheet" href="<?php echo $voir;?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css" integrity="sha512-d0olNN35C6VLiulAobxYHZiXJmq+vl+BGIgAxQtD5+kqudro/xNMvv2yIHAciGHpExsIbKX3iLg+0B6d0k4+ZA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>

*{
    padding:0;
    margin: 0;
    box-sizing: border-box;
}
body{
 
}
footer{
background: green;
}
.footerContainer{

  width: 100%;
  padding: 50px 30px 20px;
}

.footerContainer .socialIcons{
  display: flex;
  justify-content: center;
}
.footerContainer .socialIcons a{
   text-decoration: none;
   padding: 10px;
   background: white;
   margin: 10px;
   border-radius: 50%;
  }

  .footerContainer .socialIcons a img{
    font-size: 2em;
    color: black;
    opacity: 0.9;
   }

.footerContainer .footerNew{
margin: 30px 0;
  
}  
.footerContainer .footerNew ul{
   display: flex;
   justify-content: center;
   list-style-type: none;
      
    }  
    .footerContainer .footerNew ul li a{
        color: rgb(242, 242, 62);
        margin: 20px;
        text-align: none;
        font-size: 1.3em;
        opacity: 0.2;
        transition: 0.5s;
        text-decoration: none;
          
        }  

.footerContainer .footerBotton{
  background: #000;
  padding: 20px;
  text-align: center;
}

.footerContainer .footerBotton p{
    color: white;
}

 @media (max-width:800px){
    .footerNew ul{
        flex-direction: column;
    }
    .footerNew ul li{
        width: 100%;
        text-align: center;
        margin: 10px;
    }
 }
    </style>
</head>
<body>
    
<div>
        <nav>
        <a class="logo" href="">MonBogue</a>
        <ul>
              <li><a href="page.principale.php">Acceuil</a></li>
            <li><a href="./page.accueil.php">tableau de bord</a></li>
           
            <li><a href="./deconnexion.php">Deconnexion</a></li>
            <!-- <form action="" method="post">
      
            </form>
            <li><a href="inscription.php" class="inscription">Inscription</a></li> -->
        </ul>
    </nav>
</div> 