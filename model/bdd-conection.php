<?php 
    
    class Conectar{
        public static function Connection(){
            try{
                $conexion=new PDO ('mysql:host=localhost; dbname=data', 'root', '');
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTIOM);
                $conexion->exec("SET CHARACTER SET UTF8");
            }catch (Exception $e){
                die("Error".$e->getMessage());
             }
            
         return $conexion; 
        }
        
    }
    
?>

