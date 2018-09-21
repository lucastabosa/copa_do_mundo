<?php 
    include 'modelcuriosidades.php';
    if(isset ($_POST['cadastrar'])){
        $curiosidades = new Curiosidades();
        
        
        $user->setid($_POST['id']);
        $user->settitulo($_POST['titulo']);
        $user->setdescricao($_POST['descricao']);
        $user->setid_selecao($_POST['id_selecao']);
       
        
        $modelo = new ModelCuriosidades();
        $modelo->adicionar($curiosidades);
        
    }
if (isset($_POST['editar'])) {
     
     $modelo = new ModelCuriosidades();
     
     $curiosidades = new Curiosidades();
     $curiosidades->setid($_POST['id']);
     $curiosidades->settitulo($_POST['titulo']);
     $curiosidades->setdescricao($_POST['descricao']);
     $curiosidades->setid_selecao($_POST['id_selecao']);

     
     $modelo->editar($curiosidades);
     
 }

 if (isset($_POST['remover'])) {
   
      $modelo = new ModelCuriosidades();
     
     $curiosidades = new Curiosidades();
     $curiosidades->setid($_POST['id']);
     
     $modelo->remover($curiosidades);

 }

?>