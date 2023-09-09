<?php
@include 'config.php';

session_start();

if(isset($_POST['submit'])){

    $nom = mysqli_real_escape_string($conn, $_POST['nom']);
    //$prenom = mysqli_real_escape_string($conn, $_POST['prenom']);
    $cin = mysqli_real_escape_string($conn, $_POST['cin']);
    //$age=mysqli_real_escape_string($conn, $_POST['age']);
    //$formation=mysqli_real_escape_string($conn, $_POST['formation']);
    
//     if(isset($_POST['formation'])){
//    $formation = $_POST['formation'] ; 
//    $formation=mysqli_real_escape_string($conn, $_POST['formation']); 
//     }

    $select= "SELECT * FROM user WHERE nom ='$nom' && cin ='$cin' ";
    $result = mysqli_query($conn,$select);

  
    if(mysqli_num_rows($result) > 0){
       
        $row = mysqli_fetch_array($result);

        if($row['nom']=='admin' && $row['cin']=='abc123'){
            $_SESSION['admin_name'] = $row['prenom'];
            header('location:admin_page.php');
        }else{
            $_SESSION['user_name'] = $row['nom'];
            $_SESSION['user_prenom'] = $row['prenom'];
            $_SESSION['user_cin'] = $row['cin'];
            $_SESSION['user_age'] = $row['age'];
            $_SESSION['user_formation'] = $row['formation'];
            header('location:user_page.php');
        }

    }else{
        $error[] = 'Mot de passe ou user_name incorrecte';
    }


};   

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
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
         <h3>Se connecter</h3>
         <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-message">'.$error.'</span>';
                    };
                };

            ?>  
         <input type="text" name="nom" required placeholder="Enter votre nom">
         <input type="text" name="cin" required placeholder="Enter votre cin">
         
        <input type="submit" name="submit" value="Se connecter" class="form-btn2">
        <p>Vous n'avez pas un compte? <a href="inscription.php"> S'inscrire</a></p>
            </form>
    </div>

</body>
</html>