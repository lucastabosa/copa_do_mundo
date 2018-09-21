<?php 
    include 'modelSelecao.php';
    if(isset ($_POST['cadastrar'])){
        $selecao = new Selecao();
        
        $user->setnome($_POST['nome']);
        $user->setid_pais($_POST['id_pais']);
        $user->settitulo($_POST['titulo']);
        $user->setdata($_POST['data']);
        
        $modelo = new ModelSelecao();
        $modelo->adicionar($selecao);
        
    }

 if (isset($_POST['editar'])) {
     
     $modelo = new ModelSelecao();
     
     $selecao = new Selecao();
     $selecao->setid($_POST['id']);
     $selecao->setnome($_POST['nome']);
     $selecao->setid_pais($_POST['id_pais']);
       $selecao->settitulo($_POST['titulo']);
       $selecao->setdata($_POST['data']);
     
     $modelo->editar($selecao);
     
 }

 if (isset($_POST['remover'])) {
   
      $modelo = new ModelSelecao();
     
     $selecao = new Selecao();
     $selecao->setid($_POST['id']);
     
     $modelo->remover($selecao);

 }
?>