<?php
// Connexion à la base de données (exemple)
$host = 'localhost';
$dbname = 'mon_base_de_donnees';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Récupération du contenu dynamique si nécessaire
// $stmt = $pdo->query("SELECT * FROM articles");
// $articles = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Mon Site PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    
    <header>
        <h1>Bienvenue sur mon site</h1>
        <nav>
            <a href="index.php">Accueil</a>
            <a href="about.php">À propos</a>
            <a href="contact.php">Contact</a>
        </nav>
    </header>

  
    <main>
        <h2>Dernières actualités</h2>
        <p>Ci-dessous le contenu généré dynamiquement ou statique.</p>
        
        <!-- Exemple d'utilisation de la connexion BD -->
        <?php
        // Exemple simple d'affichage de données
        // foreach ($articles as $article) {
        //     echo "<p>" . htmlspecialchars($article['titre']) . "</p>";
        // }
        ?>
    </main>

    
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Mon Site Web. Tous droits réservés.</p>
    </footer>

</body>
</html>   