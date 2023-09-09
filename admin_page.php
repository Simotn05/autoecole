<?php
@include 'config.php';

session_start();
if(!isset($_SESSION['admin_name'])){
    header('location:login.php');
} 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
    <link rel="stylesheet" href="style3.css">

</head>
<body>
    <div class="background-image"></div>
    <div class="container">
        <div class="content">
            <h1>Bonjour M.<span><?php echo $_SESSION['admin_name'] ?></span></h1>
            <div id="deco">
            <a href="logout.php" class="btn-2">Se déconnecter</a>
            </div>
        
     <?php 
            $sql = "SELECT * FROM user where nom Not IN ('admin') AND cin NOT IN ('abc123')";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
             
           echo"  <h2>Liste des inscrits</h2>
            <table>
             <thead>
                 <tr>
                     <th>Nom</th>
                     <th>Prenom</th>
                     <th>CIN</th>
                     <th>Age</th>
                     <th>Formation</th>
                 </tr>
             </thead> ";
            while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["nom"]. "</td>" ;
            echo "<td>" . $row["prenom"].  "</td>" ;
            echo "<td>" . $row["cin"]. "</td>" ;  
            echo "<td>" . $row["age"]. "</td>";
            echo "<td>" . $row["formation"]. "</td>"  . "<br>";
            echo "</tr>";
            
          $test=$row['cin'];
          
}
            echo "</table>";
            } else {
         echo "Auncun etudiant n'est inscrit <br>";
        }
    ?>  </div>

        <div class="supprimer">
            <h3>Supprimer un etudiant :</h3>

            <form method ="POST">
            <!-- <input type="text" name="nom" required placeholder="Enter le nom correspondant"> -->
            <input type="text" name="cin" required placeholder="Enter le cin">
            <input type="submit" name="submit" value="Supprimer" class="btn-1"> <br>
            
            </form>
            
        </div>
        <?php

// if(isset($_POST['submit'])){
//     echo "submit clicked";

//    // $nom = mysqli_real_escape_string($conn, $_POST['nomm']);
//     //$nom = $_POST['nom'];
//    // $prenom = mysqli_real_escape_string($conn, $_POST['prenom']);
//     $cin = mysqli_real_escape_string($conn, $_POST['cin']);
//    // $cin = $_POST['cin'];
//     echo $cin;
//     //$age=mysqli_real_escape_string($conn, $_POST['age']);
//    // $formation=mysqli_real_escape_string($conn, $_POST['formation']);
// //     if(isset($_POST['formation'])){
// //    $formation = $_POST['formation'] ; 
// //    $formation=mysqli_real_escape_string($conn, $_POST['formation']); 
// //     }
        
//     try{
//         $delete ="DELETE FROM user WHERE cin=$cin";
//         $result= $conn->query($delete);
//        // $result = mysqli_query($conn,$delete);
//     }catch(Exception $e){
//             $e->getMessage();
//     }
     
// }
if (isset($_POST['submit'])) {
   
    $cin = isset($_POST['cin']) ? $_POST['cin'] : '';

    if (!empty($cin)) {
        
        try {
            $delete = "DELETE FROM user WHERE cin = ?";
            $stmt = $conn->prepare($delete);

            if ($stmt) {
               
                $stmt->bind_param("s", $cin);
                $stmt->execute();

               
                if ($stmt->affected_rows > 0) {
                   // echo "Row deleted successfully.";
                } else {
                   // echo "No rows were deleted.";
                }

                $stmt->close();
            } else {
               // echo "Error in the prepared statement.";
            }
        } catch (Exception $e) {
            //echo $e->getMessage();
        
        }
        header('Location: admin_page.php');
    } else {
        //echo "CIN is empty. Please provide a valid value.";
    
    }
}
        ?>



    </div>
</body>
</html>