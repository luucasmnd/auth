<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - BEN'ASSUR</title>

    <style>
        /* Styles pour la mise en page */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            position: relative;
        }
        .image-container {
            text-align: center;
            margin-bottom: 20px;
        }
        .image-frame {
            display: inline-block;
            padding: 5px;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .image-container img {
            width: 300px;
            height: 109px;
            display: block;
        }
        .content-box {
            width: 70%;
            margin: 0 auto;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 10px;
            text-align: center;
            position: relative;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .buttons-container {
            text-align: center;
            margin-top: 20px;
        }
        .btn {
            display: inline-block;
            margin: 20px 10px;
            padding: 15px 30px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
            font-size: 16px;
            border: none;
            cursor: pointer;
            outline: none;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>

</head>
<body>
    <div class="container">
        <!-- Image de l'établissement -->
        <div class="image-container">
            <div class="image-frame">
                <img src="logo2.png" alt="Image de l'établissement">
            </div>
        </div>
        <!-- Contenu avec la phrase et les boutons -->
        <div class="content-box">
            <p>Vous êtes sur la page de démonstration de l'authentification PHP / MySQL.</p>
            <!-- Emplacement pour les boutons -->
            <div class="buttons-container">
                <a href="login.php" class="btn">Se Connecter</a>
                <a href="register.php" class="btn">S'inscrire</a>
                <a href="dashboard.php" class="btn">Personnel</a>
                <a href="client.php" class="btn">Client</a>
            </div>
        </div>
    </div>
</body>
</html>
