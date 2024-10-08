<?php
require_once dirname(__DIR__) . '/dbConnect/MyDbConnection.php';

class Prestation {
    
    public static function createPrestation($nom, $prix) {
        $pdo = MyDbConnection::getInstance()->getPdo();
    
        try {
            $stmt = $pdo->prepare('INSERT INTO prestation (nom, prix) VALUES (?, ?)');
            $stmt->execute([$nom, $prix]);
    
            return "Prestation ajoutée avec succès.";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }
    

    public static function deletePrestation($id_prestation) {
        $pdo = MyDbConnection::getInstance()->getPdo();

        try {
            $stmt = $pdo->prepare('DELETE FROM prestation WHERE id_prestation = ?');
            $stmt->execute([$id_prestation]);
            return "Prestation supprimée avec succès.";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    public static function updatePrestation($id_prestation, $nom, $prix) {
        $pdo = MyDbConnection::getInstance()->getPdo();

        try {
            $stmt = $pdo->prepare('UPDATE prestation SET nom = ?, prix = ? WHERE id_prestation = ?');
            $stmt->execute([$nom, $prix, $id_prestation]);

            return "Prestation mise à jour avec succès.";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    public static function getPrestationById($id_prestation) {
        $pdo = MyDbConnection::getInstance()->getPdo();
        $stmt = $pdo->prepare('SELECT * FROM prestations WHERE id_prestation = ?');
        $stmt->execute([$id_prestation]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }    
    

    public static function getAllPrestations() {
        $pdo = MyDbConnection::getInstance()->getPdo();

        $stmt = $pdo->prepare('
            SELECT p.id_prestation, p.nom, p.prix, 
                GROUP_CONCAT(DISTINCT m.nom SEPARATOR ", ") AS modules,
                GROUP_CONCAT(DISTINCT e.nom SEPARATOR ", ") AS extras
            FROM prestation p
            LEFT JOIN comprend c ON p.id_prestation = c.id_prestation
            LEFT JOIN module m ON c.id_module = m.id_module
            LEFT JOIN contient ct ON p.id_prestation = ct.id_prestation
            LEFT JOIN extra e ON ct.id_extra = e.id_extra
            GROUP BY p.id_prestation
        ');
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
