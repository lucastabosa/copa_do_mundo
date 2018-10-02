<?php 
    include 'modelJogadores.php';
    if(isset ($_POST['cadastrar_jogadores'])){
        $jogadores = new Jogadores();
        
        
        $jogadores->setid($_POST['id']);
        $jogadores->setnome($_POST['nome']);
        $jogadores->setid_selecao($_POST['id_selecao']);
        $jogadores->setfoto('foto');
        $jogadores->setidade($_POST['idade']);
        $jogadores->setdescricao($_POST['descricao']);
        
        $modelo = new ModelJogadores();
        $modelo->adicionar($jogadores);
        
    }

 if (isset($_POST['editar'])) {
     
     $modelo = new ModelJogadores();
     
     $jogadores = new Jogadores();
     $jogadores->setid($_POST['id']);
     $jogadores->setnome($_POST['nome']);
     $jogadores->setid_selecao($_POST['id_selecao']);
       $jogadores->setfoto($_POST['foto']);
       $jogadores->setidade($_POST['idade']);
     $jogadores->setdesricao($_POST['descricao']);
         
     $modelo->editar($jogadores);
     
 }

 if (isset($_POST['remover'])) {
   
      $modelo = new ModelJogadores();
     
     $jogadores = new Jogadores();
     $jogadores->setid($_POST['id']);
     
     $modelo->remover($jogadores);

 }

$listadejogadores=array();
$listadeselecao=array();


?>