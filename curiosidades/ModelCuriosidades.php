<?php
include 'curiosidades.php';
class ModelPais
{
    public function adicionar(curiosidades $curiosidades){
        include 'dbpaises.php';
        
        
        $query = "INSERT INTO curiosidades(id, titulo, descricao, id_selecao) VALUES ([value-1],[value-2],[value-3],[value-4])";
        
        $statement= $connection->prepare($query);
        
        $valores = array();
        $valores[':id'] = $user->getid();
        $valores[':titulo'] = $user->gettitulo();
        $valores[':descricao'] = $user->getdescricao();
        $valores[':id_selecao'] = $user->getid_selecao();
        
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
        
        $query = "SELECT id, titulo, descricao, id_selecao FROM curiosidades WHERE 1";
        
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
    
    public function editar(curiosidades $curiosidade){
        include 'dbpaises.php';
        
        
        $query = "UPDATE curiosidades SET id=[value-1],titulo=[value-2],descricao=[value-3],id_selecao=[value-4] WHERE 1";
        
        $statement= $connection->prepare($query);
        
        $valores = array();
        $valores[':id'] = $user->getid();
        $valores[':titulo'] = $user->gettitulo();
        $valores[':descricao'] = $user->getdescricao();
          $valores[':id_selecao'] = $user->getid_selecao();
        
        
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
        
        $query = "DELETE FROM curiosidades WHERE 0";
        
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