<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="./css/accueil.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $conect;?>">
    <link type="text/css" rel="stylesheet" href="<?php echo $nav;?>">
    <link type="text/css" rel="stylesheet" href="<?php echo $voir;?>">

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
                <li><a href="index.php">Accueil</a></li>
                <!-- <li><a href=""></a></li> -->
                <li><a href="">A propos</a></li>
                <li><a href="page.connexion.php">Connexion</a></li>
                <form action="" method="post">
                    <!-- <input type="search" name="search" id="search" placeholder="rechercher"> -->
                </form>
                <li><a href="./page.inscription.php" class="inscription">Inscription</a></li>
            </ul>
        </nav>
    </div>
