<?php
class Database {
    public $conn;

    public function __construct() {
        $host = "localhost";
        $dbname = "attendance_db"; // Mets le bon nom de ta base
        $username = "root"; // Mets le bon nom d'utilisateur
        $password = ""; // Mets le bon mot de passe si nécessaire

        try {
            $this->conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erreur de connexion à la base de données: " . $e->getMessage());
        }
    }
}
?>