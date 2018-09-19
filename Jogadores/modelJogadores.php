<?php
include 'Jogadores.php';
class ModelPais
{
    public function adicionar(jogadores $jogadores){
        include 'dbpaises.php';
        
        
        $query = "INSERT INTO jogadores(id, nome, id_selecao, imagem, idade, descricao) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])";
        
        $statement= $connection->prepare($query);
        
        $valores = array();
        $valores[':id'] = $user->getid();
        $valores[':nome'] = $user->getnome();
        $valores[':id_selecao'] = $user->getid_selecao();
        $valores[':foto'] = $user->getfoto();
        $valores[':idade'] = $user->getidade();
        $valores[':descricao'] = $user->getdescricao();
        
        $result = $statement->execute($valores);
        
        if(  empty($result)  ){
            echo "Inserir usuário deu erro.";
            print_r($statement->errorInfo());
        }else{
            echo "Inserir usuário deu certo.";
        } 
    }
    public function listar(){
        include 'db.php';
        
        $query = "SELECT id, nome, id_selecao, imagem, idade, descricao FROM jogadores WHERE 1";
        
        $statement = $connection->prepare($query);
        
        //executar a query
        $result = $statement->execute();
        
        //junta todos os usuarios retornados em um array de array usuario
        //pro exemplo o 
        $u = $result[0];//pega primeiro usuario
        //echo $u['first_name'];
        $u = $result[1];
        //echo $u['first_name'];//pega segundo usuario
        
        $result = $statement->fetchAll();
        
        return $result;
    }
    
    public function editar(jogadores $jogadores){
        include 'db.php';
        
        
        $query = "UPDATE jogadores SET id=[value-1],nome=[value-2],id_selecao=[value-3],imagem=[value-4],idade=[value-5],descricao=[value-6] WHERE 1";
        
        $statement= $connection->prepare($query);
        
        $valores = array();
        $valores[':id'] = $user->getid();
        $valores[':nome'] = $user->getnome();
        $valores[':id_selecao'] = $user->getid_selecao();
        $valores[':foto'] = $user->getfoto();
        $valores[':idade'] = $user->getidade();
        $valores[':descricao'] = $user->getdescricao();
        
        $result = $statement->execute($valores);
        
        if(  empty($result)  ){
            echo "Alterar usuário deu erro.";
            print_r($statement->errorInfo());
        }else{
            echo "Alterar usuário deu certo.";
        } 
    }
    
    public function remover($id){
        include 'db.php';
        
        $query = "DELETE FROM jogadores WHERE 0";
        
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