<?php 
    class Videos {
        private $id;
        private $id_selecao;
        private $referencia;
        
        
        public function getid(){
            return $this->id;
        }
        
        public function getid_selecao(){
            return $this->id_selecao;
        }
        
        public function getreferencia(){
            return $this->referencia;
        }
        
        
        public function setid($a){
             $this->id = $a;
        }
              
        public function setid_selecao($a){
             $this->id_selecao = $a;
        }
         public function setreferencia($a){
             $this->referencia = $a;
        }
        
      
    }


?>