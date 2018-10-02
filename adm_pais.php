<?php 
    include 'pais/controllerPais.php'; ?>

<form method="POST" action ="adm.php">
          
                                <!-- CAMPO nome do PAIS -->    
                                <div class="form-group">
                                    <label for="nome">Nome do País:</label>
                                    <input type="text" class="form-control" id="nome" name="nome" aria-describedby="nomeHelp" placeholder="Digite o nome do país">
                                    <small id="nomeHelp" class="form-text text-muted">Preencha apenas com nome do País.</small>
                                  </div>

                                <!-- CAMPO historia do PAIS  -->    
                                 <div class="form-group">
                                    <label for="historia">História</label>
                                    <textarea class="form-control" id="historia" name="historia" rows="3"></textarea>
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
                                  foreach($listadepais as $lp){              
                                ?>
                                  
                                <tr>
                                  <th scope="row">
                                      <?php echo $lp['id']; ?>
                                  </th>
                                    
                                  <td><?php echo $lp['Nome']; ?></td>
                                
                                  <td><?php echo $lp['História']; ?></td>
                                    
                                  <td><?php echo $lp['Ação']; ?></td>
                                    
                                    <td><button type="button" class="btn btn-info">Deletar</button>
                                        <button type="button" class="btn btn-info">Editar</button></td>
                                  
                                </tr>
                                  <?php
                                    }
                                  ?>
                              </tbody>
                            </table>