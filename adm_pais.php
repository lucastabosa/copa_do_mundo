                            <form method="POST" action ="adm.php">
          
                                <!-- CAMPO nome do PAIS -->    
                                <div class="form-group">
                                    <label for="first_name">Nome do País:</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" aria-describedby="firstNameHelp" placeholder="Digite o nome do país">
                                    <small id="firstNameHelp" class="form-text text-muted">Preencha apenas com nome do País.</small>
                                  </div>

                                <!-- CAMPO historia do PAIS  -->    
                                 <div class="form-group">
                                    <label for="exampleFormControlTextarea1">História</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                  </div>

                                  <button type="submit" class="btn btn-danger" name="cadastrar" >Cadastrar</button>
                            </form>
                            <table class="table">
                              <thead class="thead-dark">
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">First</th>
                                  <th scope="col">Last</th>
                                  <th scope="col">Handle</th>
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