<?php
require_once dirname(__DIR__) . '/dbConnect/MyDbConnection.php';

class Contient {
    
    // Ajouter un extra à une prestation
    public static function addExtraToPrestation($id_prestation, $id_extra) {
        $pdo = MyDbConnection::getInstance()->getPdo();
        try {
            $stmt = $pdo->prepare('INSERT INTO contient (id_prestation, id_extra) VALUES (?, ?)');
            $stmt->execute([$id_prestation, $id_extra]);
            return "Extra ajouté à la prestation avec succès.";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    // Supprimer un extra spécifique d'une prestation
    public static function removeExtraFromPrestation($id_prestation, $id_extra) {
        $sql = "DELETE FROM contient WHERE id_prestation = :id_prestation AND id_extra = :id_extra";
        $stmt = MyDbConnection::getInstance()->getPdo()->prepare($sql);
        $stmt->execute(['id_prestation' => $id_prestation, 'id_extra' => $id_extra]);
    }

    // Supprimer tous les extras associés à une prestation
    public static function removeExtrasFromPrestation($id_prestation) {
        $pdo = MyDbConnection::getInstance()->getPdo();
        $stmt = $pdo->prepare("DELETE FROM contient WHERE id_prestation = ?");
        $stmt->execute([$id_prestation]);
    }

    // Récupérer les extras associés à une prestation
    public static function getExtrasByPrestation($id_prestation) {
        $pdo = MyDbConnection::getInstance()->getPdo();
        $stmt = $pdo->prepare('SELECT * FROM extra INNER JOIN contient ON extra.id_extra = contient.id_extra WHERE contient.id_prestation = ?');
        $stmt->execute([$id_prestation]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Récupérer les IDs des extras associés à une prestation
    public static function getExtrasByPrestationId($id_prestation) {
        $sql = "SELECT id_extra FROM contient WHERE id_prestation = :id_prestation";
        $stmt = MyDbConnection::getInstance()->getPdo()->prepare($sql);
        $stmt->execute(['id_prestation' => $id_prestation]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC) ?: []; 
    }
}
?>

