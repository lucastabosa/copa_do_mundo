<?php 
    class selecao{
        private $id;
        private $nome;
        private $id_pais;
        private $titulo;
        private $data;
    
        
        
        public function getid(){
            return $this->id;
        }
        
        
        public function getnome(){
            return $this->nome;
        }
        
        
        public function getid_pais(){
            return $this->id_pais;
        }
        
        
        public function gettitulo(){
            return $this->titulo;
        }
        
        
        public function getdata(){
            return $this->data;
        }
        
        
        public function setid($a){
             $this->id = $a;
        }
        
        public function setnome($a){
             $this->nome = $a;
        }
        
        public function setid_pais($a){
             $this->id_pais = $a;
        }
         
        public function settitulo($a){
             $this->titulo = $a;
        }
         
        public function setdata($a){
             $this->data = $a;
        }
        
        // public function setImage($a){
             $this->image = $a;
        }
    }
?>