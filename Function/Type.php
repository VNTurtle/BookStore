<?php
require_once('db.php');
class Type{  
    public static function getType(){
        $query = "SELECT * FROM `type` WHERE 1";
        $parameters = []; 
        $resultType = 2; 
        return DP::run_query($query, $parameters, $resultType);
    }
    public static function getTypeBySL($offset, $Count){
        $query = "SELECT * FROM `type` WHERE 1 LIMIT $offset, $Count";
        $parameters = []; 
        $resultType = 2; 
        return DP::run_query($query, $parameters, $resultType);
    }
    
    public static function getTypeById($id){
        $query = "SELECT i.* FROM `invoice` AS i
        WHERE i.userId = $id;";
        $parameters = []; 
        $resultType = 2; 
        return DP::run_query($query, $parameters, $resultType);
    }
    public static function postType($name){
        $query =
        "INSERT INTO `Type` (`Id`, `Name`, `Banner`, `Status`) 
        VALUES (null, ?, null, b'1')";
        $parameters = [$name]; 
        $resultType = 1; 
        return DP::run_query($query, $parameters, $resultType);
    }
}
?>