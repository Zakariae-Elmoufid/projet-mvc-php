<?php
$host = '172.19.0.2'; // Ou l'IP de ton container PostgreSQL
$dbname = 'database';
$user = 'user';
$password = 'password';

try {
    $dsn = "pgsql:host=$host;dbname=$dbname";
    $pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    echo "✅ Connexion réussie à PostgreSQL avec PDO !";
} catch (PDOException $e) {
    echo "❌ Erreur de connexion : " . $e->getMessage();
}
?>
