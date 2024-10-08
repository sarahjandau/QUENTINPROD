<?php
require_once dirname(__DIR__) . '/dbConnect/MyDbConnection.php';

class Module {
    public static function createModule($nom) {
        $pdo = MyDbConnection::getInstance()->getPdo();

        try {
            $stmt = $pdo->prepare('INSERT INTO module (nom) VALUES (?)');
            $stmt->execute([$nom]);

            return "Module ajouté avec succès.";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    public static function deleteModule($id_module) {
        $pdo = MyDbConnection::getInstance()->getPdo();

        try {
            $stmt = $pdo->prepare('DELETE FROM module WHERE id_module = ?');
            $stmt->execute([$id_module]);
            return "Module supprimé avec succès.";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    public static function updateModule($id_module, $nom) {
        $pdo = MyDbConnection::getInstance()->getPdo();

        try {
            $stmt = $pdo->prepare('UPDATE module SET nom = ? WHERE id_module = ?');
            $stmt->execute([$nom, $id_module]);

            return "Module mis à jour avec succès.";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    public static function getModuleById($id) {
        $pdo = MyDbConnection::getInstance()->getPdo();
        $stmt = $pdo->prepare('SELECT * FROM module WHERE id_module = ?');
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public static function getAllModules(){
        $pdo = MyDbConnection::getInstance()->getPdo();
        $stmt = $pdo->query('SELECT * FROM module');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>
