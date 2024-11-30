<?php
require_once('db.php');
class CoverType{  
    public static function getCoverType(){
        $query = "SELECT * FROM `coverType`";
        $parameters = []; 
        $resultType = 2; 
        return DP::run_query($query, $parameters, $resultType);
    }
    public static function putCoverType($Name){
        $query="INSERT INTO `Covertype`(`Id`, `Name`, `Status`) VALUES (null,?,true)";
        $parameters = [$Name];   
        $resultType = 1;
        return DP::run_query($query,$parameters,$resultType);
    }
    
}
?>