<?php
     include 'comidastipicas/controllerComidasTipicas.php'; ?>
     
                    

<form method="POST" action ="adm.php">
                            
                                <!-- CAMPO COMIDATIPICA -->    
                                <div class="form-group">
                                    <label for="comidastipicas">Nome da comida :</label>
                                    <input type="text" class="form-control" id="comidastipicas" name="comidastipicas" aria-describedby="comidastipicasHelp" placeholder="Digite seu primeiro nome">
                                    <small id="comidastipicasHelp" class="form-text text-muted">Preencha apenas com nome da comida.</small>
                                </div>

                                <!-- CAMPO REGIÂO -->    
                                <div class="form-group">
                                    <label for="regiao">Região:</label>
                                    <input type="text" class="form-control" id="regiao" name="regiao" aria-describedby="regiaoHelp" placeholder="Digite seu último nome">
                                    <small id="regiao" class="form-text text-muted">Preencha apenas com nome da Região.</small>
                                </div>


                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Não sou robô</label>
                                </div>

                                  <button type="submit" class="btn btn-danger" name="cadastrar_comidatipica" >Cadastrar</button>
                            </form>
                
                                <table class="table">
                              <thead class="thead-dark">
                                <tr>
                                  <th scope="col">Id</th>
                                  <th scope="col">Comida</th>
                                  <th scope="col">Região</th>
                                    <th scope="col">Ação</th>
                                </tr>
                              </thead>
                              <tbody>
                                 <?php
                                  foreach($listadecomidastipicas as $lct){              
                                ?>
                                  
                                <tr>
                                  <th scope="row">
                                      <?php echo $lct['id']; ?>
                                  </th>
                                    
                                  <td><?php echo $lct['comida']; ?></td>
                                
                                  <td><?php echo $lct['regiao']; ?></td>
                                    
                                  <td><button type="button" class="btn btn-info">Deletar</button>
                                        <button type="button" class="btn btn-info">Editar</button></td>
                                  
                                </tr>
                                  <?php
                                    }
                                  ?>
                              </tbody>
                            </table>