<?php 
    class User{
        private $id;
        private $titulo;
        private $descricao;
        private $id_selecao;
        
        
        public function getid(){
            return $this->id;
        }
        
        
        public function gettitulo(){
            return $this->titulo;
        }
        
        
        public function getdescricao(){
            return $this->descricao;
        }
        
        
        public function getid_selecao(){
            return $this->id_selecao;
        }
        
        public function setid($a){
             $this->id = $a;
        }
        
        public function settitulo($a){
             $this->titulo = $a;
        }
        
        public function setdescricao($a){
             $this->descricao = $a;
        }
        public function setid_selecao($a){
             $this->id_selecao = $a;
        }
        
       
    }

?>