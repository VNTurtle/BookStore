<?php
require_once('db.php');
class Img{  
    public static function getImg(){
        $query = "SELECT * FROM `invoice`";
        $parameters = []; 
        $resultType = 2; 
        return DP::run_query($query, $parameters, $resultType);
    }
    public static function getImgByBookId($id){
        $query = "SELECT * FROM `image` WHERE BookId=$id;";
        $parameters = []; 
        $resultType = 2; 
        return DP::run_query($query, $parameters, $resultType);
    }
    
}
?>