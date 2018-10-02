<?php 
    include 'modelvideos.php';
    if(isset ($_POST['cadastrar_videos'])){
        $videos = new videos();
        
        
        $videos->setid($_POST['id']);
        $videos->setid_selecao($_POST['id_selecao']);
        $videos->setreferencia($_POST['referencia']);
       
        
        $modelo = new Modelvideos();
        $modelo->adicionar($videos);
        
    }

 if (isset($_POST['editar'])) {
     
     $modelo = new Modelvideos();
     
     $videos = new videos();
     $videos->setid($_POST['id']);
     $videos->setid_selecao($_POST['id_selecao']);
     $videos->setreferencia($_POST['referencia']);
      
         
     $modelo->editar($videos);
     
 }

 if (isset($_POST['remover'])) {
   
      $modelo = new Modelvideos();
     
     $videos = new videos();
     $videos->setid($_POST['id']);
     
     $modelo->remover($videos);

 }

$listadevideos=array();
$listadepais= $modelo->listar();

?>