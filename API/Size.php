<?php
require_once('db.php');
class Size{  
    public static function getSize(){
        $query = "SELECT * FROM `size`";
        $parameters = []; 
        $resultType = 2; 
        return DP::run_query($query, $parameters, $resultType);
    }
    public static function putSize($Name){
        $query="INSERT INTO `Size`(`Id`, `Name`, `Status`) VALUES (null,?,true)";
        $parameters = [ $Name];   
        $resultType = 1;
        return DP::run_query($query,$parameters,$resultType);
    }
    
}
?>