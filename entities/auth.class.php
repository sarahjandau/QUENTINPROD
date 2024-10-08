<?php
require_once dirname(__DIR__). '/dbConnect/MyDbConnection.php';

class Auth {
    public static function startSession() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function isUser($id_user) {
        $pdo = MyDbConnection::getInstance()->getPdo(); 
        $stmt = $pdo->prepare('SELECT id_user FROM user WHERE id_user = ?');
        $stmt->execute([$id_user]);
        return $stmt->fetch() !== false; 
    }

    public static function verifyUser() {
        self::startSession();
        if (!isset($_SESSION['id_user'])) {
            echo "Session utilisateur non définie.";
            exit();
        } else {
            $id_user = $_SESSION['id_user']; 
            if (!self::isUser($id_user)) {
                echo "L'utilisateur avec l'ID $id_user n'existe pas.";
                exit();
            }
        }
    }
}
?>
