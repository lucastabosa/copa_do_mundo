<?php
include 'user.php';

class ModelUser {
    public function adicionar(User $user) {
    include 'bd.php';
    
    $query = "INSERT INTO users (first_name, last_name, email, password, image) 
    VALUES (:first_name, :last_name, :email, :password, :image)";

    $statement = $connection->prepare($query);
    
        $valores = array();
        $valores[':first_name'] = $user->getFirstName();
        $valores[':last_name'] = $user->getLastName();
        $valores[':email'] = $user->getEmail();
        $valores[':password'] = $user->getPassword();
        $valores[':image'] = $user->getImage();

    $result = $statement->execute($valores);

    if(  empty($result) ) {
        print "<br>Nao inseriu";
            print_r( $statement->errorInfo() );
    }
        
    else {
        print "<br>Deu certo inserir";
    }
        
}
    
     public function editar() {
        
        
    }
    
     public function listar() {
        
        
    }
    
     public function remover() {
        
        
    }

}


?>