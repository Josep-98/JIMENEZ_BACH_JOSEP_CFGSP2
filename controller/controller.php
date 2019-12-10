<?php

require_once(__DIR__.'/../model/Bolet.php');

class BoletCnt{
    
    public function boletList(){
        return $_SESSION['bList'];
    }
    
    public function details($id){
        
    }
}