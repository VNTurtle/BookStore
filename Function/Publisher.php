<?php
require_once('db.php');
class Publisher{  
    public static function getPublisher(){
        $query = "SELECT * FROM `publisher`";
        $parameters = []; 
        $resultType = 2; 
        return DP::run_query($query, $parameters, $resultType);
    }
    public static function getPublisherBySL($offset, $slsp){
        $query = "SELECT * FROM `publisher` LIMIT $offset, $slsp";
        $parameters = []; 
        $resultType = 2; 
        return DP::run_query($query, $parameters, $resultType);
    }
    public static function postPublisher($Name){
        $query="INSERT INTO `Publisher`(`Id`, `Name`, `Status`) VALUES (null,?,true)";
        $parameters = [ $Name];   
        $resultType = 1;
        return DP::run_query($query,$parameters,$resultType);
    }
    
}
?>