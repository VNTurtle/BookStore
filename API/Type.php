<?php
require_once('db.php');
class Type{  
    public static function getType(){
        $query = "SELECT * FROM `type` WHERE 1";
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
    
}
?>