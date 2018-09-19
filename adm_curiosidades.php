                            <form method="POST" action ="adm.php">
                            
                                <!-- CAMPO CURIOSIDADES -->    
                                <div class="form-group">
                                    <label for="curiosidades">Título:</label>
                                    <input type="text" class="form-control" id="curiosidades" name="curiosidades" aria-describedby="curiosidadesHelp" placeholder="Digite o Título">
                                    <small id="curiosidadesHelp" class="form-text text-muted">Preencha com o título.</small>
                                </div>

                                <!-- CAMPO DESCRIÇAO -->    
                                <div class="form-group">
                                    <label for="descricao">Descrição:</label>
                                    <input type="text" class="form-control" id="descricao" name="descricao" aria-describedby="descricaoHelp" placeholder="Digite a Descrição ">
                                    <small id="descricaoHelp" class="form-text text-muted">Preencha com a descrição.</small>
                                </div>
                                
                                  <!-- CAMPO SELECAO -->    
                                <div class="form-group">
                                    <label for="titulo">Seleção :</label>
                                    
                                    <div class="input-group mb-3">
                                      
                                      <select class="custom-select" name="id_selecao" id="id_selecaoHelp">
                                        <?php  
                                          $listadeseleçao = array();
                                          $listadeselecao[0] = array('id'=>1, 'nome'=>'Brasil');
                                          $listadeseleçao[1] = array('id'=>2, 'nome'=>'França');
                                          
                                          
                                          foreach( $listadeselecao    as   $ls   ){     ?>
                                          
                                            <option value="<?php echo $ls['id']?>">    <?php echo $ls['nome']?></option>
                                          
                                         <?php  } ?> 
                                      </select>
                                    </div>

                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Não sou robô</label>
                                </div>
                    
                                    <small id="id_selecaoHelp" class="form-text text-muted">Selecione uma seleção.</small>
                                </div>
                                
                                  <button type="submit" class="btn btn-danger" name="cadastrar" >Cadastrar</button>
                            </form>


                                <table class="table">

                            <table class="table">

                              <thead class="thead-dark">
                                <tr>
                                  <th scope="col">Id</th>
                                  <th scope="col">Título</th>
                                  <th scope="col">Descrição</th>
                                    <th scope="col">Ação</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td></td>
                                  <td></td>
                                  <td><button type="button" class="btn btn-info">Deletar</button>
                                    <button type="button" class="btn btn-info">Editar</button></td>
                                  
                                </tr>
                              </tbody>
                            </table>