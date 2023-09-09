<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formations</title>
    <link rel="stylesheet" href="style6.css">
<style>
    *{
      font-family: 'Poppins','sans-serif';
      margin:0;
      padding:0;
      box-sizing : border-box;
      scroll-behavior: smooth;
  }

   /* body{
    background-color: black;  
    margin:  20px;  
  }  */

  header {
    /* background-color: white; */
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
    /* background-color: black; */
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
<h2>Formules Des Permis :</h2>
<br>
<h4>Choisissez la formule qui correspond le plus à vos attentes:</h4>
<br>


<div class="centre">
    
  <div id="P1">   
    <table>
    <thead>
    <tr>
        <th>Permis A : 3300DHS <br>  <img src="imag/moto.png" alt="" id="moto" > </th>
    </tr>
    </thead>
    <tr>
        <td>Frais de dossier administratif: 700 dhs</td>
    </tr>
    <tr>
        <td>Formation théorique (cours illimités): 850 dhs</td>
    </tr>
    <tr>
        <td>Formation pratique (20 séances de 45 min): 1 600 dhs</td>
    </tr>
    <tr>
        <td>Visite médicale: 150 dhs</td>
    </tr>
    </table>
        
  </div>

 <div id="P2">
        <table>
        <thead>
        <tr>
            <th>Permis B : 3550DHS <br> <img src="imag/voiture2.png" alt="" id="voiture"></th>
        </tr>
        </thead>
        <tr>
            <td>Frais de dossier administratif: 700 dhs</td>
        </tr>
        <tr>
            <td>Formation théorique (cours illimités): 850 dhs</td>
        </tr>
        <tr>
            <td>Formation pratique (20 séances de 45 min): 1 850 dhs</td>
        </tr>
        <tr>
            <td>Visite médicale: 150 dhs</td>
        </tr>
        </table>
    
 </div>
    
    <div  id="P3">
        <table>
            <thead>
            <tr>
                <th>Permis C : 3800DHS <br> <img src="imag/camion.png" alt="" id="camion"></th>
            </tr>
            </thead>
            <tr>
                <td>Frais de dossier administratif: 700 dhs</td>
            </tr>
            <tr>
                <td>Formation théorique (cours illimités): 850 dhs</td>
            </tr>
            <tr>
                <td>Formation pratique (20 séances de 45 min): 2 100 dhs</td>
            </tr>
            <tr>
                <td>Visite médicale: 150 dhs</td>
            </tr>
        </table>
         
    </div>
        
    <div  id="P4">
            <table>
                <thead>
                <tr>
                    <th>Permis D : 4050DHS <br>  <img src="imag/bus1.png" alt="" id="bus"> </th>
                </tr>
                </thead>
                <tr>
                    <td>Frais de dossier administratif: 700 dhs</td>
                </tr>
                <tr>
                    <td>Formation théorique (cours illimités): 850 dhs</td>
                </tr>
                <tr>
                    <td>Formation pratique (20 séances de 45 min): 2 350 dhs</td>
                </tr>
                <tr>
                    <td>Visite médicale: 150 dhs</td>
                </tr>
               
            </table>
             
    </div>
</div> 
</div>   
            




</body>
</html>