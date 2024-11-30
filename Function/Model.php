<?php
require_once('db.php');
class Model{  
    public static function getModel(){
        $query = "SELECT * FROM `Model`";
        $parameters = []; 
        $resultType = 2; 
        return DP::run_query($query, $parameters, $resultType);
    }
    public static function postModel($BookId, $model, $modelBin){
        $query = "INSERT INTO `model` (`BookId`, `Model`, `ModelBin`,`Alpha`,`Beta`,`Radius`,`target_x`, `target_y`,`target_z`,`Status`) 
                VALUES (?,?,?,?,?,?,?,?,?, true);";
        $parameters = [$BookId,$model,$modelBin,2.5,1.5,15,0,0,0]; 
        $resultType = 1; 
        return DP::run_query($query, $parameters, $resultType);
    }
    
}
?>