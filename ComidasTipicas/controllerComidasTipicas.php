<?php 
    include 'modelComidasTipicas.php';
    if(isset ($_POST['cadastrar_comidatipica'])){
        $ComidasTipicas = new ComidasTipicas();
       
        
        $ComidasTipicas->setid($_POST['id']);
        $ComidasTipicas->setnome($_POST['nome']);
        $ComidasTipicas->setregiao($_POST['regiao']);
       
        
        $modelo = new ModelComidasTipicas();
        $modelo->adicionar($ComidasTipicas);
        
    }

 if (isset($_POST['editar'])) {
     
     $modelo = new ModelComidasTipicas();
     
     $ComidasTipicas = new Selecao();
     $ComidasTipicas->setid($_POST['id']);
     $ComidasTipicas->setnome($_POST['nome']);
     $ComidasTipicas->setregiao($_POST['regiao']);
      
     
     $modelo->editar($ComidasTipicas);
     
 }

 if (isset($_POST['remover'])) {
   
      $modelo = new ModelComidasTipicas();
     
     $ComidasTipicas = new ComidasTipicas();
     $ComidasTipicas->setid($_POST['id']);
     
     $modelo->remover($ComidasTipicas);

 }

$listadecomidastipicas=array();

?>