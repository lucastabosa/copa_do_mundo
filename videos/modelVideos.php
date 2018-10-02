<?php
include 'videos.php';
class ModelVideos 
{
    public function adicionar(videos $videos){
        include 'dbpaises.php';
        
        
        $query = "INSERT INTO jogadores(id, id_selecao, referencia) VALUES (:id,:id_selecao,:referencia)";
         
        $statement= $connection->prepare($query);
        
        $valores = array();
        $valores[':id'] = $user->getid();
        $valores[':id_selecao'] = $user->getid_selecao();
        $valores[':referencia'] = $user->getreferencia();
        
        
        $result = $statement->execute($valores);
        
        if(  empty($result)  ){
            echo "Inserir usuário deu erro.";
            print_r($statement->errorInfo());
        }else{
            echo "Inserir usuário deu certo.";
        } 
    }
    public function listar(){
        include 'dbpaises.php';
        
        $query = "SELECT id, id_selecao, referencia  FROM videos WHERE 1";
        
        
        $statement = $connection->prepare($query);
        
        //executar a query
        $result = $statement->execute();
        
        //junta todos os usuarios retornados em um array de array usuario
        //pro exemplo o 
        //$u = $result[0];//pega primeiro usuario
        //echo $u['first_name'];
        //$u = $result[1];
        //echo $u['first_name'];//pega segundo usuario
        
        $result = $statement->fetchAll();
        
        return $result;
    }
    
    public function editar(videos $videos){
        include 'dbpaises.php';
        
        
        $query = "UPDATE videos SET  id_selecao = :id_selecao , referencia = :referencia WHERE id = :id";
        
        $statement= $connection->prepare($query);
        
        $valores = array();
        $valores[':id'] = $user->getid();
        $valores[':id_selecao'] = $user->getid_selecao();
        $valores[':referencia'] = $user->getreferencia();
        
        
        $result = $statement->execute($valores);
        
        if(  empty($result)  ){
            echo "Alterar usuário deu erro.";
            print_r($statement->errorInfo());
        }else{
            echo "Alterar usuário deu certo.";
        } 
    }
    
    public function remover($id){
        include 'dbpaises.php';
        
        $query = "DELETE FROM videos WHERE id = :id";
        
        $statement = $connection->prepare($query);
        
        
        $valores = array();
        $valores[':id'] = $id;
    
        $result = $statement->execute($valores);
        
        
        if(  empty($result)  ){
            echo "Remover usuário deu erro.";
            print_r($statement->errorInfo());
        }else{
            echo "Remover usuário deu certo.";
        }         
        
    }
}
?>