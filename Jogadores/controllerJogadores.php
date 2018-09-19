<?php 
    include 'modelJogadores.php';
    if(isset ($_POST['cadastrar'])){
        $user = new User();
        $senha_criptografada = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        $user->setid($_POST['id']);
        $user->setnome($_POST['nome']);
        $user->setid_selecao($_POST['id_selecao']);
        $user->setfoto('foto');
        $user->setidade($_POST['idade']);
        $user->setdescricao($_POST['descricao']);
        
        $modelo = new ModelUser();
        $modelo->adicionar($user);
        
    }
?>