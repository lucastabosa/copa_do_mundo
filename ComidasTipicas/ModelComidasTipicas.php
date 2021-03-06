<?php
include 'ComidasTipicas.php';
class ModelComidasTipicas
{
    public function adicionar(comidasTipicas $comidasTipicas){
        include 'dbpaises.php';
        
        
        $query = "INSERT INTO comidas tipicas(id, nome, regiao) VALUES (:id,:nome,:regiao)";
        
        
        $statement= $connection->prepare($query);
        
        $valores = array();
        $valores[':id'] = $user->getid();
        $valores[':nome'] = $user->getnome();
        $valores[':regiao'] = $user->getregiao();
        
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
        
        $query = "SELECT id, nome, regiao FROM comidas tipicas WHERE 1";
        
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
    
    public function editar(comidasTipicas $comidasTipicas){
        include 'dbpaises.php';
        
        
        $query = "UPDATE comidas tipicas SET nome = :nome, regiao = :regiao WHERE id = :id";
        
        $statement= $connection->prepare($query);
        
        $valores = array();
        $valores[':id'] = $user->getid();
        $valores[':nome'] = $user->getnome();
        $valores[':regiao'] = $user->getregiao();
        
        
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
        
        $query = "DELETE FROM comidas tipicas WHERE id = :id";
        
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