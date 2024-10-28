<?php
require_once('db.php');
class TypeDetail{  
    public static function getTypeDetail(){
        $query = "SELECT * FROM `type` WHERE 1";
        $parameters = []; 
        $resultType = 2; 
        return DP::run_query($query, $parameters, $resultType);
    }
    public static function getTypeDetailById($id){
        $query = "SELECT i.* FROM `invoice` AS i
        WHERE i.userId = $id;";
        $parameters = []; 
        $resultType = 2; 
        DP::run_query($query, $parameters, $resultType);
    }
    
}
?>