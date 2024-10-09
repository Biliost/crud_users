<?php
require_once('cxn.php');
$message='';

if(isset($_POST["create"])){


if((empty($_POST["nom"]))||(empty($_POST["prenom"]))||(
    empty($_POST["email"]))){
        $message='<p class = "info"> Veuillez remplir les champs </p>';
    }else{
        $vnom =$_POST["nom"];
        $vprenom =$_POST["prenom"];
        $vemail =$_POST["email"];
    
        $sql="INSERT INTO `users`(`nom`,`prenom`,`email`) VALUES ('$vnom','$vprenom','$vemail')";

        $ajout = mysqli_query($cxn,$sql);
        
        $message ='<p class="green"> Utilisateur Ajoute </p>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Add | client</title>
</head>
<body>
    <h1> Ajouter un nouveau Utilisateur</h1>
    <form action="" method="POST">
        <input type="text" name="nom" placeholder="Nom"><br><br>
        <input type="text" name="prenom" placeholder="Prenom"><br><br>
        <input type="email" name="email" placeholder="Email"><br><br>
        <input type="submit" name="create" value="Ajouter">
        <?php echo $message ?>
    </form>
    <a href="index.php">Liste des Utilisateurs</a>
</body>
</html>