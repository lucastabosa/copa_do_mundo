                            <form method="POST" action ="adm.php" enctype="multipart/form-data">
                            
                                <!-- CAMPO JOGADORES -->    
                                <div class="form-group">
                                    <label for="jogador">Nome do jogador:</label>
                                    <input type="text" class="form-control" id="jogador" name="jogador" aria-describedby="jogadorHelp" placeholder="Digite nome do jogador">
                                    <small id="jogadorHelp" class="form-text text-muted">Preencha apenas com o nome do jogador.</small>
                                </div>
                                
                                <!-- CAMPO SELECAO -->    
                                <div class="form-group">
                                    <label for="titulo">Seleção:</label>
                                    
                                    <div class="input-group mb-3">
                                      
                                      <select class="custom-select" name="id_selecao" id="id_selecaoHelp">
                                        <?php  
                                          $listadeselecao = array();
                                          $listadeselecao[0] = array('id'=>1, 'nome'=>'Brasil');
                                          $listadeselecao[1] = array('id'=>2, 'nome'=>'França');
                                          
                                          
                                          foreach( $listadeselecao    as   $ls   ){     ?>
                                          
                                            <option value="<?php echo $lp['id']?>">    <?php echo $ls['nome']?></option>
                                          
                                         <?php  } ?> 
                                      </select>
                                    </div>
                                    
                                    <small id="id_selecaoHelp" class="form-text text-muted">Selecione uma seleção.</small>
                                </div>

                                <!-- CAMPO IMAGEM -->    
                                <div class="form-group">
                                    <label for="imagem">Imagem:</label>
                                    <input type="file" name ="file" aria-describedby="imagemHelp" class="form-control">
                                    <small id="imagemHelp" class="form-text text-muted">Faça somente o upload da imagem.</small>
                                </div>

                                <!-- CAMPO IDADE -->    
                                <div class="form-group">
                                    <label for="idade">Coloque a idade do jogador:</label>
                                    <input type="idade" class="form-control" id="idade" name="idade" aria-describedby="idadelHelp" placeholder="Digite a idade do jogador">
                                    <small id="idadeHelp" class="form-text text-muted">Digite a idade.</small>
                                </div>

                                    <!-- Campo DESCRICAO -->
                                <div class="form-group">
                                    <label for="descricao">Digite a descrição do jogador:</label>
                                    <input type="text" class="form-control" id="descricao" name="descricao" aria-describedby="descricaoHelp" placeholder="Descrição">
                                    <small id="descricaoHelp" class="form-text text-muted">Preencha apenas com  a descrição do jogador.</small>
                                </div>


                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Não sou robô</label>
                                </div>

                                  <button type="submit" class="btn btn-danger" name="cadastrar" >Cadastrar</button>
                            </form>

                                <table class="table">
                              <thead class="thead-dark">
                                <tr>
                                  <th scope="col">Id</th>
                                  <th scope="col">Nome</th>
                                  <th scope="col">Imagem</th>
                                  <th scope="col">Idade</th>
                                  <th scope="col">Descrição</th>
                                <th scope="col">Ação</th> 
                                </tr>
                              </thead>
                              <tbody>
                                  
                            
                                  
                            <?php
                              foreach($listadejogadores as $lj){              
                            ?>
                                  
                                <tr>
                                  <th scope="row">
                                      <?php echo $lj['id']; ?>
                                  </th>
                                    
                                  <td><?php echo $lj['nome']; ?></td>
                                
                                  <td><?php echo $lj['imagem']; ?></td>
                                    
                                  <td><?php echo $lj['idade']; ?></td>
                                    
                                  <td><?php echo $lj['descricao'];?></td>
                                    
                                    <td><button type="button" class="btn btn-info">Deletar</button>
                                        <button type="button" class="btn btn-info">Editar</button></td>
                                  
                                </tr>
                                  <?php
                                    }
                                  ?>
                              </tbody>
                            </table>