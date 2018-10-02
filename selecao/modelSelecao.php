<?php
include 'selecao.php';
class ModelSelecao
{
    public function adicionar(selecao $selecao){
        include 'dbpaises.php';
        
        
<<<<<<< HEAD:selecao/modelSelecao.php
        $query = "INSERT INTO selecao(id, nome, id_pais, titulo, data) VALUES ([valuemue-5])";
=======
        $query = "INSERT INTO selecao(nome, id_pais, titulo, data) VALUES ()";
>>>>>>> 327db56b37b6ce0f519642cf1dafdc87d409956d:seleção/modelSelecao.php
        
        $statement= $connection->prepare($query);
        
        $valores = array();
        $valores[':id'] = $user->getid();
        $valores[':nome'] = $user->getnome();
        $valores[':id_pais'] = $user->getid_pais();
        $valores[':titulo'] = $user->gettitulo();
        $valores[':data'] = $user->getdata();
        
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
        
        $query = "SELECT id, nome, id_pais, titulo, data FROM selecao WHERE 1";
        
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
    
    public function editar(selecao $selecao){
        include 'dbpaises.php';
        
        
        $query = "UPDATE selecao SET id=[value-1],nome=[value-2],id_pais=[value-3],titulo=[value-4],data=[value-5] WHERE 1";
        
        $statement= $connection->prepare($query);
        
        $valores = array();
        $valores[':id'] = $user->getid();
        $valores[':nome'] = $user->getnome();
        $valores[':id_pais'] = $user->getid_pais();
        $valores[':titulo'] = $user->gettitulo();
        $valores[':data'] = $user->getdata();
        
        
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
        
        $query = "DELETE FROM selecao WHERE 0";
        
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