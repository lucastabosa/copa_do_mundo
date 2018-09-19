                            <form method="POST" action ="adm.php">
                            
                                <!-- CAMPO JOGADORES -->    
                                <div class="form-group">
                                    <label for="jogador">Nome do jogador:</label>
                                    <input type="text" class="form-control" id="jogador" name="jogador" aria-describedby="jogadorHelp" placeholder="Digite nome do jogador">
                                    <small id="jogadorHelp" class="form-text text-muted">Preencha apenas com o nome do jogador.</small>
                                </div>

                                <!-- CAMPO IMAGEM -->    
                                <div class="form-group">
                                    <label for="imagem">Imagem:</label>
                                    <input type="text" class="form-control" id="imagem" name="imagem" aria-describedby="imagemHelp" placeholder="Faça o upload da imagem">
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
                                <tr>
                                  <th scope="row">1</th>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                   <td></td>
                                    <td><button type="button" class="btn btn-info">Deletar</button>
                                        <button type="button" class="btn btn-info">Editar</button></td>
                                  
                                </tr>
                              </tbody>
                            </table>