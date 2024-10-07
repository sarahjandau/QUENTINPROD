<?php
require_once dirname(__DIR__). '/dbConnect/MyDbConnection.php';

class User {
    public static function createUser($nom, $prenom, $mail, $password, $role){
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $pdo = MyDbConnection::getInstance()->getPdo(); 

        try {
            $stmt = $pdo->prepare('INSERT INTO user (nom, prenom, mail, password, role) VALUES (?, ?, ?, ?, ?)');
            $stmt->execute([$nom, $prenom, $mail, $hashedPassword, $role]);

            return "Utilisateur ajouté avec succès.";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    public static function deleteUser($id_user){
        $pdo = MyDbConnection::getInstance()->getPdo(); 

        try {
            $stmt = $pdo->prepare('DELETE FROM user WHERE id_user = ?');
            $stmt->execute([$id_user]);
            return "Utilisateur supprimé avec succès.";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    public static function updateUser($id_user, $nom, $prenom, $mail, $role) {
        $pdo = MyDbConnection::getInstance()->getPdo();
    
        try{
           
            $stmt = $pdo->prepare('UPDATE user SET nom = ?, prenom = ?, mail = ?, role = ? WHERE id_user = ?');
            $stmt->execute([$nom, $prenom, $mail, $role, $id_user]);
    
            return "Utilisateur mis à jour avec succès.";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }   

    public static function getUserById($id){
        $pdo = MyDbConnection::getInstance()->getPdo(); 
        $stmt = $pdo->prepare('SELECT * FROM user WHERE id_user = ?');
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public static function getAllUsers(){
        $pdo = MyDbConnection::getInstance()->getPdo(); 
        $stmt = $pdo->prepare('SELECT * FROM user');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getAllUsersWithRoles(){
        $pdo = MyDbConnection::getInstance()->getPdo(); 
        $stmt = $pdo->prepare('SELECT * FROM user');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>