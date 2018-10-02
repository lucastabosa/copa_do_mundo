<?php
     include 'selecao/controllerSelecao.php'; ?>

<form method="POST" action ="adm.php">
                            
                                <!-- CAMPO SELECAO -->    
                                <div class="form-group">
                                    <label for="selecao">Digite o nome da Seleção:</label>
                                    <input type="text" class="form-control" id="selecao" name="selecao" aria-describedby="selecaoHelp" placeholder="Digite nome">
                                    <small id="selecaoHelp" class="form-text text-muted">Preencha apenas com nome da seleção.</small>
                                </div>

                                <!-- CAMPO TITULO -->    
                                <div class="form-group">
                                    <label for="titulo">Título:</label>
                                    <input type="text" class="form-control" id="titulo" name="titulo" aria-describedby="tituloHelp" placeholder="Digite o nome do título">
                                    <small id="tituloHelp" class="form-text text-muted">Preencha apenas com o nome do título.</small>
                                </div>

                                <!-- CAMPO PAIS -->    
                                <div class="form-group">
                                    <label for="titulo">País:</label>
                                    
                                    <div class="input-group mb-3">
                                      
                                      <select class="custom-select" name="id_pais" id="id_paisHelp">
                                        <?php  
                                         
                                          foreach( $listadepais    as   $lp   ){     ?>
                                          
                                            <option value="<?php echo $lp['id']?>">    <?php echo $lp['nome']?></option>
                                          
                                         <?php  } ?> 
                                      </select>
                                    </div>
                                    
                                    <small id="id_paisHelp" class="form-text text-muted">Selecione um país.</small>
                                </div>
                                
                                <!-- CAMPO DATA -->    
                                <div class="form-group">
                                    <label for="data">Data</label>
                                    <input type="data" class="form-control" id="data" name="data" aria-describedby="dataHelp" placeholder="Digite a data do título ganho">
                                    <small id="dataHelp" class="form-text text-muted">Digite a data.</small>
                                </div>

                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Não sou robô</label>
                                </div>

                                  <button type="submit" class="btn btn-danger" name="cadastrar_selecao" >Cadastrar</button>
                            </form>
                                <table class="table">
                              <thead class="thead-dark">
                                <tr>
                                  <th scope="col">Id</th>
                                  <th scope="col">Nome</th>
                                  <th scope="col">título</th>
                                  <th scope="col">Data</th>
                                  <th scope="col">Ação</th>   
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                  foreach($listadeselecao as $ls){              
                                ?>
                                  
                                <tr>
                                  <th scope="row">
                                      <?php echo $ls['id']; ?>
                                  </th>
                                    
                                  <td><?php echo $ls['nome']; ?></td>
                                
                                  <td><?php echo $ls['titulo']; ?></td>
                                    
                                  <td><?php echo $ls['data']; ?></td>
                                  
                                    
                                    <td><button type="button" class="btn btn-info">Deletar</button>
                                        <button type="button" class="btn btn-info">Editar</button></td>
                                  
                                </tr>
                                  <?php
                                    }
                                  ?>
                              </tbody>
                            </table>