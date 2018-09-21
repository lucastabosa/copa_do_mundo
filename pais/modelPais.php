<?php
include 'pais.php';
class ModelPais
{
    public function adicionar(pais $pais){
        include 'dbpaises.php';
        
        
        $query = " INSERT INTO pais( nome, historia) 
        VALUES (:nome, :historia)";
      
        
        $statement= $connection->prepare($query);
        
        $valores = array();
        $valores[':nome'] = $pais->getnome();
        $valores[':historia'] = $pais->gethistoria();
        
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
        
        $query = "  SELECT * FROM pais WHERE 1
       ";
       
        
        $statement = $connection->prepare($query);
        
        //executar a query
        $result = $statement->execute();
        
        //junta todos os usuarios retornados em um array de array usuario
        //pro exemplo o 
       // $u = $result[0];//pega primeiro usuario
        //echo $u['first_name'];
        //$u = $result[1];
        //echo $u['first_name'];//pega segundo usuario
        
        $result = $statement->fetchAll();
        
        return $result;
    }
    
    public function editar(pais $pais){
        include 'dbpaises.php';
        
    
        $query = "UPDATE pais SET nome=[:nome],historia=[:historia] WHERE id=:id";
      
        $statement= $connection->prepare($query);
        
        $valores = array();
        $valores[':id'] = $pais->getid();
        $valores[':nome'] = $pais->getnome();
        $valores[':historia'] = $pais->gethistoria();
        
        
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
        
        $query = "DELETE FROM pais WHERE id=:id";
        
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