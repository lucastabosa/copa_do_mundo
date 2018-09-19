<?php 
    include 'modelCuriosidade.php';
    if(isset ($_POST['cadastrar'])){
        $user = new User();
        $senha_criptografada = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        $user->setid($_POST['id']);
        $user->settitulo($_POST['titulo']);
        $user->setdescricao($_POST['descricao']);
        $user->setid_selecao($_POST['id_selecao']);
       
        
        $modelo = new ModelUser();
        $modelo->adicionar($user);
        
    }
?>