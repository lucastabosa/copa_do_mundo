                          <form method="POST" action ="adm.php">
                            
                                <!-- CAMPO SELECAO -->    
                                <div class="form-group">
                                    <label for="first_name">Digite o nome da Seleção:</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" aria-describedby="firstNameHelp" placeholder="Digite nome">
                                    <small id="firstNameHelp" class="form-text text-muted">Preencha apenas com nome da seleção.</small>
                                </div>

                                <!-- CAMPO TITULO -->    
                                <div class="form-group">
                                    <label for="last_name">Título:</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" aria-describedby="lastNameHelp" placeholder="Digite o nome do título">
                                    <small id="lastNameHelp" class="form-text text-muted">Preencha apenas com o nome do título.</small>
                                </div>

                                <!-- CAMPO DATA -->    
                                <div class="form-group">
                                    <label for="email">Data</label>
                                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Digite a data do título ganho">
                                    <small id="emailHelp" class="form-text text-muted">Digite a data.</small>
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
                                  <th scope="col">título</th>
                                  <th scope="col">Data</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Mark</td>
                                  <td>Otto</td>
                                  <td>@mdo</td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>Jacob</td>
                                  <td>Thornton</td>
                                  <td>@fat</td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>Larry</td>
                                  <td>the Bird</td>
                                  <td>@twitter</td>
                                </tr>
                              </tbody>
                            </table>