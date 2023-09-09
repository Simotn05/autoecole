<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="stylecontact.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
  *{
      font-family: 'Poppins','sans-serif';
      margin:0;
      padding:0;
      box-sizing : border-box;
      scroll-behavior: smooth;
  }

 /* body{
  /* background-color: b; */
  /* margin:  20px; 
  }*/

  header {
    /* background-color: black; */
    width: 100%;
    /* height: 100px; */
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

    
   

<div class="container">
    <h1>Contact :</h1>
  
    <div class="centre">
      
      <div  class="info">
      
      <br>
    
        &nbsp;<i class="fa-solid fa-location-dot"></i> <span>&nbsp;18, Avenue des fars, Hay ... ..., Fes.</span><br><br>
        &nbsp;<i class="fa-solid fa-phone"></i>  <span>&nbsp;05 88 88 88 88.</span><br><br>
        &nbsp;<i class="fa-solid fa-envelope"></i>  <span>&nbsp;auto.ecolefes1@gmail.com</span><br><br>
        &nbsp;<i class="fa-solid fa-calendar-days"></i>  <span>&nbsp;Lundi au jeudi: 08h30 à 20h00. <br>
                                                        &emsp;&nbsp; Vendredi: 08h30 à 12h30 et 15h30 à 20h00.<br>
                                                        &emsp;&nbsp; Samedi: 08h30 à 13h30.</span>

      </div>


    <div class="form">  
      <form action="https://formsubmit.co/auto.ecolefes1@gmail.com" method="POST">
            
        <label for="fname">Nom et Prénom :</label>
        <input type="text" id="fname" name="fullname" placeholder="Votre nom et prénom...">

        <label for="lname">Email :</label>
        <input type="text" id="lname" name="email" placeholder="Votre email...">

        <label for="lname">Sujet :</label>
        <input type="text" id="lname" name="sujet" placeholder="Sujet...">

        <label for="subject">Votre message :</label>
        <textarea id="subject" name="message" placeholder="..." style="height:150px"></textarea>

        <input type="submit" value="Envoyer">

      </form>
    </div> 
 
  <!-- <div class="img"></div> -->
   
    </div>
</div>

</body>
</html>