<?php 
    include_once 'modelPais.php';
    if(isset ($_POST['cadastrar_pais'])){
        $pais = new pais();
        
        
        $pais->setnome($_POST['nome']);
        $pais->sethistoria($_POST['historia']);
        $modelo = new ModelPais();
        $modelo->adicionar($pais);
        
    }

 if (isset($_POST['editar'])) {
     
     $modelo = new ModelPais();
     
     $pais = new pais();
     $pais->setid($_POST['id']);
     $pais->setnome($_POST['nome']);
     $pais->sethistoria($_POST['historia']);
     
     $modelo->editar($pais);
     
 }

 if (isset($_POST['remover'])) {
   
      $modelo = new ModelPais();
     
     $pais = new pais();
     $pais->setid($_POST['id']);
     
     $modelo->remover($pais);

 }
$modelo = new ModelPais();
$listadepais= $modelo->listar();
?>