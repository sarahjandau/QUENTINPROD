<?php
require_once dirname(__DIR__) . '/dbConnect/MyDbConnection.php';

class Comprend{
    
    public static function addModuleToPrestation($id_prestation, $id_module) {
        $pdo = MyDbConnection::getInstance()->getPdo();
        try {
            $stmt = $pdo->prepare('INSERT INTO comprend (id_prestation, id_module) VALUES (?, ?)');
            $stmt->execute([$id_prestation, $id_module]);
            return "Module ajouté à la prestation avec succès.";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    public static function removeModuleFromPrestation($id_prestation, $id_module) {
        $sql = "DELETE FROM comprend WHERE id_prestation = :id_prestation AND id_module = :id_module";
        $stmt = MyDbConnection::getInstance()->getPdo()->prepare($sql);
        $stmt->execute(['id_prestation' => $id_prestation, 'id_module' => $id_module]);
    }

    public static function removeModulesFromPrestation($id_prestation) {
        $pdo = MyDbConnection::getInstance()->getPdo();
        $stmt = $pdo->prepare("DELETE FROM comprend WHERE id_prestation = ?");
        $stmt->execute([$id_prestation]);
    }

    public static function getModulesByPrestation($id_prestation) {
        $pdo = MyDbConnection::getInstance()->getPdo();
        $stmt = $pdo->prepare('SELECT * FROM module INNER JOIN comprend ON module.id_module = comprend.id_module WHERE comprend.id_prestation = ?');
        $stmt->execute([$id_prestation]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getModulesByPrestationId($id_prestation) {
        $sql = "SELECT id_module FROM comprend WHERE id_prestation = :id_prestation";
        $stmt = MyDbConnection::getInstance()->getPdo()->prepare($sql);
        $stmt->execute(['id_prestation' => $id_prestation]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC) ?: []; 
    }
}
?>

