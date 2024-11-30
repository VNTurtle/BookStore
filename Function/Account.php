<?php
require_once('db.php');
class Account{  
    public static function getAccount($offset, $slsp){
        $query = "SELECT * FROM `account`  LIMIT $offset, $slsp" ;
        $parameters = []; 
        $resultType = 2; 
        return DP::run_query($query, $parameters, $resultType);
    }
    public static function getAccountById($id) {
        $query = "SELECT * FROM `account` WHERE Id = :id";
        $parameters = [
            ':id' => $id
        ];
        $resultType = 2;
        return DP::run_query($query, $parameters, $resultType);
    }

    public static function updateAccount($id, $firstName, $lastName, $email, $roleId, $status) {
        $query = "
            UPDATE `account` 
            SET 
                FirstName = :firstName,
                LastName = :lastName,
                Email = :email,
                RoleId = :roleId,
                Status = :status
                WHERE Id = :id
        ";
        $parameters = [
            ':firstName' => $firstName,
            ':lastName' => $lastName,
            ':email' => $email,
            ':roleId' => $roleId,
            ':status' => $status,
            ':id' => $id
        ];
        return DP::run_query($query, $parameters, 0); // Thực thi không trả về kết quả
    }
    public static function addAccount($firstName, $lastName, $email, $password, $roleId, $status) {
        $query = "
            INSERT INTO `account` (FirstName, LastName, Email, Password, RoleId, Status)
            VALUES (:firstName, :lastName, :email, :password, :roleId, :status)
        ";
        $parameters = [
            ':firstName' => $firstName,
            ':lastName' => $lastName,
            ':email' => $email,
            ':password' => $password,
            ':roleId' => $roleId,
            ':status' => $status
        ];
        return DP::run_query($query, $parameters, 0); 
    }
    public static function emailExists($email) {
        $query = "SELECT COUNT(*) as count FROM `account` WHERE Email = :email";
        $parameters = [':email' => $email];
        $result = DP::run_query($query, $parameters, 2); 
        return $result[0]['count'] > 0; 
    }
}
?>