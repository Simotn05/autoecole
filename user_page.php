<?php
@include 'config.php';

session_start();
if(!isset( $_SESSION['user_name'])){
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user page</title>
    <link rel="stylesheet" href="style3.css">

</head>
<body>
    <div class="container">
        <div class="content">
         <h1>Bonjour, </h1>
         <div id="deco">
            <a href="logout.php" class="btn-2">Se déconnecter</a>
            </div>
         <div id=centre>
            
         <?php
          echo "<tr>";
            echo "Nom    &nbsp; &ensp; &emsp;:<td> "       . $_SESSION['user_name']. "</td>". "<br>" ;
            echo "Prenom &ensp;&nbsp; :<td> "    . $_SESSION['user_prenom'].  "</td>" . "<br>"; 
            echo "CIN     &nbsp; &emsp; &ensp;  :<td> "       . $_SESSION['user_cin']. "</td>" . "<br>";
            echo "Age     &nbsp; &emsp; &ensp;  :<td> "       . $_SESSION['user_age']. " ans"."</td>" . "<br>"; 
            echo "Formation :<td> " . $_SESSION['user_formation']. "</td>"  . "<br>";
            echo "</tr>";?>
        </div>
            <!-- <span>Nom   : <?php //echo $_SESSION['user_name'] ?>.</span> <br>
            <span>Prenom    : <?php //echo $_SESSION['user_prenom'] ?>. </span> <br> 
            <span>Age       : <?php //echo $_SESSION['user_age'] ?> ans.</span> <br>
            <span>Formation : <?php //echo $_SESSION['user_formation'] ?>.</span>

          -->
            
        </div>



    </div>
</body>
</html>