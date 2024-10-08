<?php
require_once dirname(__DIR__) . '/dbConnect/MyDbConnection.php';

class Extra {
    public static function createExtra($nom, $prix) {
        $pdo = MyDbConnection::getInstance()->getPdo();

        try {
            $stmt = $pdo->prepare('INSERT INTO extra (nom, prix) VALUES (?, ?)');
            $stmt->execute([$nom, $prix]);

            return "Extra ajouté avec succès.";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    public static function deleteExtra($id_extra) {
        $pdo = MyDbConnection::getInstance()->getPdo();

        try {
            $stmt = $pdo->prepare('DELETE FROM extra WHERE id_extra = ?');
            $stmt->execute([$id_extra]);
            return "Extra supprimé avec succès.";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    public static function updateExtra($id_extra, $nom, $prix) {
        $pdo = MyDbConnection::getInstance()->getPdo();

        try {
            $stmt = $pdo->prepare('UPDATE extra SET nom = ?, prix = ? WHERE id_extra = ?');
            $stmt->execute([$nom, $prix, $id_extra]);

            return "Extra mis à jour avec succès.";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    public static function getExtraById($id) {
        $pdo = MyDbConnection::getInstance()->getPdo();
        $stmt = $pdo->prepare('SELECT * FROM extra WHERE id_extra = ?');
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public static function getAllExtras() {
        $pdo = MyDbConnection::getInstance()->getPdo();
        $stmt = $pdo->prepare('SELECT * FROM extra');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
