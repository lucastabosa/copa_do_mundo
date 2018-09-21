<?php 
    class Jogadores {
        private $id;
        private $nome;
        private $id_selecao;
        private $foto;
        private $idade;
        private $descricao;
        
        public function getid(){
            return $this->id;
        }
        
        
        public function getnome(){
            return $this->nome;
        }
        
        
        public function getid_selecao(){
            return $this->id_selecao;
        }
        
        
        public function getfoto(){
            return $this->foto;
        }
        
        
        public function getidade(){
            return $this->idade;
        }
        
        public function getdescricao(){
            return $this->descricao;
        }
        
        
        
        public function setid($a){
             $this->id = $a;
        }
        
        public function setnome($a){
             $this->nome = $a;
        }
        
        public function setid_selecao($a){
             $this->id_selecao = $a;
        }
        public function setfoto($a){
             $this->foto = $a;
        }
        
        public function setidade($a){
             $this->idade = $a;
        }
        
        public function setdescricao($a){
             $this->descricao = $a;
    }

?>