<?php 
    include 'modelPais.php';
    if(isset ($_POST['cadastrar'])){
        $user = new User();
        $senha_criptografada = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        $user->setid($_POST['id']);
        $user->setnome($_POST['nome']);
        $user->sethistoria($_POST['historia']);
        $modelo = new ModelPais();
        $modelo->adicionar($pais);
        
    }
?>