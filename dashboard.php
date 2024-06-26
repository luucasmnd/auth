<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    header('Location:login.php');
    exit;
}

// Vérifier si l'adresse e-mail de l'utilisateur se termine par "@benassur.com"
$user_email = $_SESSION['user_email'];
if (substr($user_email, -13) !== "@benassur.com") {
    header('Location:client.php'); // Rediriger vers la page client.php
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .dashboard-container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px 30px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h2 {
            color: #333;
        }
        p {
            color: #555;
        }
        a {
            color: #007BFF;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="dashboard-container">
    <h2>Bienvenue sur votre tableau de bord</h2>
    <p>Vous pouvez maintenant accéder à toutes les fonctionnalités réservées à nos utilisateurs autorisés.</p>
    <a href="logout.php">Se déconnecter</a>
</div>

</body>
</html>
