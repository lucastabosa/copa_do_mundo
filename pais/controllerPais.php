<?php 
    include 'modelPais.php';
    if(isset ($_POST['cadastrar'])){
        $pais = new pais();
        $senha_criptografada = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        $user->setid($_POST['id']);
        $user->setnome($_POST['nome']);
        $user->sethistoria($_POST['historia']);
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


?>