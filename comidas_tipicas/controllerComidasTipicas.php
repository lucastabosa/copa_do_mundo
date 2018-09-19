<?php 
    include 'modelComidasTipicas.php';
    if(isset ($_POST['cadastrar'])){
        $user = new User();
        $senha_criptografada = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        $user->setid($_POST['id']);
        $user->setnome($_POST['nome']);
        $user->setregiao($_POST['regiao']);
       
        
        $modelo = new ModelUser();
        $modelo->adicionar($user);
        
    }
?>