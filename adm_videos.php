                           <form method="POST" action ="adm.php">
                            
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
                                <tr>
                                  <th scope="row">1</th>
                                  <td></td>        
                                  <td><button type="button" class="btn btn-info">Deletar</button>
                                      <button type="button" class="btn btn-info">Editar</button></td>   
                                </tr>    
                              </tbody>
                            </table>