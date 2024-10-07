<?php
require_once dirname(__DIR__). '/dbConnect/MyDbConnection.php';

class Auth {
    public static function startSession() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function isAdmin($id_user) {
        $pdo = MyDbConnection::getInstance()->getPdo(); 
        $stmt = $pdo->prepare('SELECT role FROM user WHERE id_user = ?');
        $stmt->execute([$id_user]);
        $userRole = $stmt->fetch();
        return $userRole && $userRole['role'] === 'admin';
    }

    public static function verifyAdmin() {
        self::startSession();
        if (!isset($_SESSION['id_user'])) {
            echo "Session utilisateur non définie.";
            exit();
        } else {
            $id_user = $_SESSION['id_user']; // Utilisation correcte de $id_user
            if (!self::isAdmin($id_user)) {
                echo "L'utilisateur avec l'ID $id_user n'est pas un administrateur.";
                exit();
            }
        }
    }
}
?>