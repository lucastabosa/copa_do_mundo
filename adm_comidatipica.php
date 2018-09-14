                            <form method="POST" action ="adm.php">
                            
                                <!-- CAMPO COMIDATIPICA -->    
                                <div class="form-group">
                                    <label for="first_name">Nome da comida :</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" aria-describedby="firstNameHelp" placeholder="Digite seu primeiro nome">
                                    <small id="firstNameHelp" class="form-text text-muted">Preencha apenas com nome da comida.</small>
                                </div>

                                <!-- CAMPO last name -->    
                                <div class="form-group">
                                    <label for="last_name">Região:</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" aria-describedby="lastNameHelp" placeholder="Digite seu último nome">
                                    <small id="lastNameHelp" class="form-text text-muted">Preencha apenas com nome da Região.</small>
                                </div>


                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>

                                  <button type="submit" class="btn btn-danger" name="cadastrar" >Cadastrar</button>
                            </form>