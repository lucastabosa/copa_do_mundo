                           <form method="POST" action ="adm.php">
                               
                               
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
                                          
                                            <option value="<?php echo $ls['id']?>">    <?php echo $ls['nome']?></option>
                                          
                                         <?php  } ?> 
                                      </select>
                                    </div>
                                    
                                    <small id="id_selecaoHelp" class="form-text text-muted">Selecione uma seleção.</small>
                                </div>
                            
                                <!-- CAMPO VIDEO -->    
                                <div class="form-group">
                                    <label for="video">Referência do Vídeo:</label>
                                    <input type="text" class="form-control" id="video" name="video" aria-describedby="videoHelp" placeholder="Preencha com a referência">
                                    <small id="videoHelp" class="form-text text-muted">Preencha apenas com a referência do vídeo.</small>
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
                                  <th scope="col">Referência/Link</th>
                                    <th scope="col">Ação</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                  foreach($listadevideos as $lv){              
                                ?>
                                  
                                <tr>
                                  <th scope="row">
                                      <?php echo $lv['id']; ?>
                                  </th>
                                    
                                  <td><?php echo $lv['Referência']; ?></td>
                                      
                                  <td><?php echo $lv['Ação']; ?></td>
                                    
                                  <td><button type="button" class="btn btn-info">Deletar</button>
                                        <button type="button" class="btn btn-info">Editar</button></td>
                                  
                                </tr>
                                  <?php
                                    }
                                  ?>
                              </tbody>
                            </table>