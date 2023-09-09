<?php
@include 'config.php';

if(isset($_POST['submit'])){

    $nom = mysqli_real_escape_string($conn, $_POST['nom']);
    $prenom = mysqli_real_escape_string($conn, $_POST['prenom']);
    $cin = mysqli_real_escape_string($conn, $_POST['cin']);
    $age=mysqli_real_escape_string($conn, $_POST['age']);
    $formation=mysqli_real_escape_string($conn, $_POST['formation']);
//     if(isset($_POST['formation'])){
//    $formation = $_POST['formation'] ; 
//    $formation=mysqli_real_escape_string($conn, $_POST['formation']); 
//     }

    $select= "SELECT * FROM user WHERE nom ='$nom' && cin ='$cin' ";
    $result = mysqli_query($conn,$select);

    if(mysqli_num_rows($result) > 0){
        $error[] = 'Ce compte déjà existe';
    }else{
        $insert = "INSERT INTO user(nom, prenom, cin, age, formation) VALUES('$nom','$prenom','$cin','$age','$formation')";
        mysqli_query($conn, $insert);
        header('location:login.php');
    }


}   

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
    <link rel="stylesheet" href="style2.css">
<style>
  *{
      font-family: 'Poppins','sans-serif';
      margin:0;
      padding:0;
      box-sizing : border-box;
      scroll-behavior: smooth;
  }

   body{
   background-color: orangered; 
   /* margin:  20px;  */
  } 

  header {
    background-color: white;
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
      box-shadow: 0 0 0 0 white;
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

<body>

   
    <div class="form-container">
        <form action="" method="post">
         <h3>INSCRIPTION</h3>
             <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-message">'.$error.'</span>';
                    };
                };

            ?>  
         <input type="text" name="nom" required placeholder="Enter votre nom">
         <input type="text" name="prenom" required placeholder="Enter votre prenom">
         <input type="text" name="cin" required placeholder="Enter votre cin">
         <input type="text" name="age" required placeholder="Enter votre age">
         
         <!-- <input class="rad" type="radio" name="formation" value="Permis A">
         <label for="">Permis A</label>
         <input class="rad" type="radio" name="formation" value="Permis B">
         <label for="">Permis B</label>
         <input class="rad" type="radio" name="formation" value="Permis C">
         <label for="">Permis C</label>
         <input class="rad" type="radio" name="formation" value="Permis D">
         <label for="">Permis D</label> -->
        
         <select name="formation" required >
            <option value="frm" disabled selected hidden>Choisir votre formation</option>
            <option value="Permis A">Permis A</option>
            <option value="Permis B">Permis B</option>
            <option value="Permis C">Permis C</option>
            <option value="Permis D">Permis D</option>
        </select>


        <input type="submit" name="submit" value="enregistrer" class="form-btn">
        <p>Vous êtes déjà inscris? <a href="login.php"> Se connecter</a></p>
            </form>
    </div>

</body>
</html>




