<?php 
    class pais{
        private $id;
        private $nome;
        private $historia;
        
        
        public function getid(){
            return $this->id;
        }
        
        
        public function getnome(){
            return $this->nome;
        }
        
        
        public function gethistoria(){
            return $this->historia;
        }
        
        
        public function setid($a){
             $this->id = $a;
        }
        
        public function setnome($a){
             $this->nome = $a;
        }
        
        public function sethistoria($a){
             $this->historia = $a;
        }
        
    }
?>

