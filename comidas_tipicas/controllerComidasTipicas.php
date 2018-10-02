<?php 
    include 'modelComidasTipicas.php';
    if(isset ($_POST['cadastrar'])){
        $user = new User();
        
        
        $user->setid($_POST['id']);
        $user->setnome($_POST['nome']);
        $user->setregiao($_POST['regiao']);
       
        
        $modelo = new ModelUser();
        $modelo->adicionar($user);
        
    }
if (isset($_POST['editar'])) {
     
     $modelo = new ModelcomidasTipicas();
     
     $ComidasTipicas = new ComidasTipicas();
     $ComidasTipicas->setid($_POST['id']);
     $ComidasTipicas->setnome($_POST['nome']);
     $ComidasTipicas->setid_pais($_POST['id_pais']);
       $ComidasTipicas->settitulo($_POST['titulo']);
       $ComidasTipicas->setdata($_POST['data']);
     
     $modelo->editar($ComidasTipicas);
     
 }

 if (isset($_POST['remover'])) {
   
      $modelo = new ModelComidasTipicas();
     
     $ComidasTipicas = new ComidasTipicas();
     $ComidasTipicas->setid($_POST['id']);
     
     $modelo->remover($ComidasTipicas);

 }

?>