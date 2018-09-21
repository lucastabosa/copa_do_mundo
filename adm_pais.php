                            <form method="POST" action ="adm.php">
          
                                <!-- CAMPO nome do PAIS -->    
                                <div class="form-group">
                                    <label for="pais">Nome do País:</label>
                                    <input type="text" class="form-control" id="pais" name="pais" aria-describedby="paisHelp" placeholder="Digite o nome do país">
                                    <small id="paisHelp" class="form-text text-muted">Preencha apenas com nome do País.</small>
                                  </div>

                                <!-- CAMPO historia do PAIS  -->    
                                 <div class="form-group">
                                    <label for="exampleFormControlTextarea1">História</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
                                  <th scope="col">História</th>
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
                                    
                                  <td><?php echo $lj['Nome']; ?></td>
                                
                                  <td><?php echo $lj['História']; ?></td>
                                    
                                  <td><?php echo $lj['Ação']; ?></td>
                                    
                                    <td><button type="button" class="btn btn-info">Deletar</button>
                                        <button type="button" class="btn btn-info">Editar</button></td>
                                  
                                </tr>
                                  <?php
                                    }
                                  ?>
                              </tbody>
                            </table>