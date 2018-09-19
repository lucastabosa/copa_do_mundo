<?php 
    include 'modelSelecao.php';
    if(isset ($_POST['cadastrar'])){
        $user = new User();
        $senha_criptografada = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        $user->setid($_POST['id']);
        $user->setnome($_POST['nome']);
        $user->setid_pais($_POST['id_pais']);
        $user->settitulo($_POST['titulo']);
        $user->setdata($_POST['data']);
        
        $modelo = new ModelSelecao();
        $modelo->adicionar($selecao);
        
    }
?>