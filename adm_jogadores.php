                            <form method="POST" action ="adm.php">
                            
                                <!-- CAMPO JOGADORES -->    
                                <div class="form-group">
                                    <label for="first_name">Nome do jogador:</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" aria-describedby="firstNameHelp" placeholder="Digite nome do jogador">
                                    <small id="firstNameHelp" class="form-text text-muted">Preencha apenas com o nome do jogador.</small>
                                </div>

                                <!-- CAMPO IMAGEM -->    
                                <div class="form-group">
                                    <label for="last_name">Imagem:</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" aria-describedby="lastNameHelp" placeholder="Faça o upload da imagem">
                                    <small id="lastNameHelp" class="form-text text-muted">Faça somente o upload da imagem.</small>
                                </div>

                                <!-- CAMPO IDADE -->    
                                <div class="form-group">
                                    <label for="email">Coloque a idade do jogador:</label>
                                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Digite a idade do jogador">
                                    <small id="emailHelp" class="form-text text-muted">Digite a idade.</small>
                                </div>

                                    <!-- Campo DESCRICAO -->
                                <div class="form-group">
                                    <label for="last_name">Digite a descrição do jogador:</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" aria-describedby="lastNameHelp" placeholder="Descrição">
                                    <small id="lastNameHelp" class="form-text text-muted">Preencha apenas com  a descrição do jogador.</small>
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
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Mark</td>
                                  <td>Otto</td>
                                  <td>@mdo</td>
                                   <td>@mdo</td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>Jacob</td>
                                  <td>Thornton</td>
                                  <td>@fat</td>
                                  <td>@mdo</td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>Larry</td>
                                  <td>the Bird</td>
                                  <td>@twitter</td>
                                  <td>@mdo</td>
                                </tr>
                                  <tr>
                                  <th scope="row">4</th>
                                  <td>nygy8g8</td>
                                  <td>nbygd</td>
                                  <td>rfbf7</td>
                                  <td>@mdo</td>
                                </tr>
                              </tbody>
                            </table>