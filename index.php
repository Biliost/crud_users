<?php
require_once('cxn.php')
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CRUD</title>
</head>
<body>
    <h1>Liste des Utilisateurs</h1>
    <table>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
        </tr>
        <tbody>
            <tr>
                <td>talla</td>
                <td>alain</td>
                <td>alain@gmail.com</td>
            </tr>
            <tr>
                <td>toto</td>
                <td>gerard</td>
                <td>toto@gmail.com</td>
            </tr>
            <tr>
                <td>titi</td>
                <td>oscard</td>
                <td>titi@gmail.com</td>
            </tr>
        </tbody>
    </table>
    <a href="create.php">Ajouter un client</a>
    
</body>
</html>