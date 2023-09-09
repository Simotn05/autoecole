<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infos pratiques</title>
    <link rel="stylesheet" href="style4.css">
<style>

    *{
        font-family: 'Poppins','sans-serif';
        margin:0;
        padding:0;
        box-sizing : border-box;
        scroll-behavior: smooth;
    }

    /* body{
    /* background-color: black; */
    /* margin:  20px; 
    } */

    header {
    /* background-color: #eee; */
    width: 100%;

    position : fixed;
    z-index : 999;
    display : flex;
    justify-content: space-between;
    align-items: center;
    padding : 10px 50px;
  
  }

  .logo{
    text-decoration: none;
    font-weight: bolder;
    font-size: 1.2em;
    font-family:'Verdana';
    color: orangered;
    /* background-color: orangered; */
    border: 5px solid orangered;
    border-radius: 25px;
    padding: 5px;
  }

  .navigation a {
    font-weight: bold;
    color : orangered;
    text-decoration: none;
    font-size: 1.1em;
    /* font-weight: 300; */
    /* padding-left: 30px; */
    font-family:'Verdana';
  }
  .navigation a:hover{
    color : black;
    text-decoration: underline;
  }
   /* img{
    padding-left: 10px;
    width: 170px;
    height: 100px;
    
  } */
  li{
    padding-left: 10px;
  }
  .flexible-header {
    position: relative;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 30px;
    /* height: 10px; */
    /* background-color: #333; */
    color: white;
  }
  
  
  
  .flexible-header nav ul {
    list-style: none;
    display: flex;
    margin: 0;
    padding: 0;
  }
  
  .flexible-header nav ul li {
    margin-right: 20px;
  }
  
  @media screen and (max-width: 768px) {
    .flexible-header {
        position: relative;
      flex-direction: column;
      text-align: center;
    }
  
    .flexible-header nav ul {
      flex-direction: column;
      align-items: center;
    }
  
    .flexible-header nav ul li {
      margin: 10px 0;
    }
  }
  span{
    margin-top: 1000px;
  }




  /* -------- */

  #inscription{
      font-weight: bold;
    text-decoration: none;
    font-size: 1.1em;
    padding: 10px 20px;
    background-color: orangered;
    color: #eee;
    /* margin:0 5px; */
    border-radius: 25px;
    border-color: black;
    animation: pulse 1.8s infinite;
  }
  @keyframes pulse {
    0%{
      box-shadow: 0 0 0 0 black;
    }
    65%{
      box-shadow: 0 0 0 10px transparent;
    }
    100%{
      box-shadow: 0 0 0 0 transparent;
    }
  }
</style>
</head>


<body>
<header class="flexible-header">
        <!-- <a href="index.php" class="logo"> <img src="images/logo4.png" alt=""></a> -->
        <a href="index.php" class="logo"> Auto-Ecole</a>
        <nav class="navigation">
          <ul> 
            <li><a href="index.php">Acceuil</a></li>
            <li><a href="formation.php">Formules</a></li>
            <li><a href="infos.php">Infos</a></li>
            <li><a  href="contact.php">Contact</a></li>
            <li><a id="inscription" href="inscription.php">S'inscrire</a></li>
          </ul>   
        </nav>
    </header>

    <div class="background"></div>
        <div class="container">
            <h1>Infos pratiques</h1>
         <div class="centre">

          <div class="info">  
            <div class="para">  <p>Les documents à fournir ne sont pas indispensables pour le jour de votre inscription. En effet, pour vous inscrire, votre pièce d’identité et un mode de règlement suffisant.</p> <br> </div>
            <div class="para">  <p>Par contre, les documents à fournir sont totalement indispensables à l’enregistrement de votre dossier de demande de permis de conduire.</p> <br> </div>
            <div class="para">  <p>Sans l’enregistrement de ce dossier, vous ne pourrez pas vous présenter aux examens ni commencer les cours de pratique. Si les documents à fournir ne doivent pas être un obstacle à votre inscription, il faut pourtant vous assurer qu’ils seront tous en votre possession à court terme.</p> <br> <br> </div>
          </div>

          <div class="doc">
            <h4>Les documents:</h4> <br>
            <p>8 photos d’identité homologuées.</p><br><br>
            <h4>Photocopies :</h4><br>
            <p>Pièce d’identité (recto/verso) du candidat.</p><br>
            <p>Permis de conduire si vous en avez un.</p><br>
            <p>Pièce d’identité (recto/verso) du représentant légal pour les mineurs.</p><br>
          </div> 
          </div>
            <div class="test1"></div>
        </div>


</body>
</html>