<?php 
    class User{
        private $id;
        private $nome;
        private $regiao;
        
        
        public function getid(){
            return $this->id;
        }
        
        
        public function getnome(){
            return $this->nome;
        }
        
        
        public function getregiao(){
            return $this->regiao;
        }
        
        public function setid($a){
             $this->id = $a;
        }
        
        public function setnome($a){
             $this->nome = $a;
        }
        
        public function setregiao($a){
             $this->regiao = $a;
        }
    }

?>