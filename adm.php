<?php 
   // include 'controllerUser.php';
?>				
<!DOCTYPE html>
<html> 
	<head>
            <meta charset="UTF-8">
    
        <link href="meusite/css/bootstrap.min.css" rel="stylesheet" >
        
        
        <link href="meusite/css/meuestilo.css" rel="stylesheet">
        
        <script type="text/javascript" src="meusite/js/jquery-min.js"></script>
        <script type="text/javascript" src="meusite/js/bootstrap.js">
        </script>
    </head>
	<body>
	   <div class="container-fluid">
           
           
           
           
           <div class="row">
     
               <div class="col-3">

                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                          <a class="nav-link active" id="v-pills-Pais-tab" data-toggle="pill" href="#v-pills-Pais" role="tab" aria-controls="v-pills-Pais" aria-selected="true">País</a>
                          <a class="nav-link" id="v-pills-Selecao-tab" data-toggle="pill" href="#v-pills-Selecao" role="tab" aria-controls="v-pills-Selecao" aria-selected="false">Seleção</a>
                          <a class="nav-link" id="v-pills-Jogadores-tab" data-toggle="pill" href="#v-pills-Jogadores" role="tab" aria-controls="v-pills-Jogadores" aria-selected="false">Jogadores</a>
                          <a class="nav-link" id="v-pills-curiosidades-tab" data-toggle="pill" href="#v-pills-Curiosidades" role="tab" aria-controls="v-pills-Curiosidade" aria-selected="false">Curiosidades</a>
                          <a class="nav-link" id="v-pills-ComidasTipicas-tab" data-toggle="pill" href="#v-pills-ComidasTipicas" role="tab" aria-controls="v-pills-ComidasTipicas" aria-selected="false">Comidas típicas</a>
                          <a class="nav-link" id="v-pills-Videos-tab" data-toggle="pill" href="#v-pills-Videos" role="tab" aria-controls="v-pills-Videos" aria-selected="false">Vídeos</a>
                    </div>
                </div>

               <div class="col-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-Pais" role="tabpanel" aria-labelledby="v-pills-Pais-tab">
                            
                            <form method="POST" action ="adm.php">
          
                                <!-- CAMPO first name -->    
                                <div class="form-group">
                                    <label for="first_name">Primeiro nome:</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" aria-describedby="firstNameHelp" placeholder="Digite seu primeiro nome">
                                    <small id="firstNameHelp" class="form-text text-muted">Preencha apenas com primeiro nome.</small>
                                  </div>

                                <!-- CAMPO last name -->    
                                <div class="form-group">
                                    <label for="last_name">Último nome:</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" aria-describedby="lastNameHelp" placeholder="Digite seu último nome">
                                    <small id="lastNameHelp" class="form-text text-muted">Preencha apenas com último nome.</small>
                                  </div>

                                <!-- CAMPO EMAIL -->    
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Digite email">
                                    <small id="emailHelp" class="form-text text-muted">Não compartilhe e-mail com ninguém.</small>
                                  </div>



                                    <!-- SENHA -->
                                  <div class="form-group">
                                    <label for="password">Senha:</label>
                                    <input type="password" name="password"class="form-control col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3" id="password" placeholder="Senha">
                                  </div>


                                  <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                  </div>

                                  <button type="submit" class="btn btn-danger" name="cadastrar" >Cadastrar</button>
                            </form>
                            
                        </div>
                        <div class="tab-pane fade" id="v-pills-Selecao" role="tabpanel" aria-labelledby="v-pills-Selecao-tab">
                            
                            <form method="POST" action ="adm.php">
                            
                                <!-- CAMPO first name -->    
                                <div class="form-group">
                                    <label for="first_name">Primeiro nome:</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" aria-describedby="firstNameHelp" placeholder="Digite seu primeiro nome">
                                    <small id="firstNameHelp" class="form-text text-muted">Preencha apenas com primeiro nome.</small>
                                </div>

                                <!-- CAMPO last name -->    
                                <div class="form-group">
                                    <label for="last_name">Último nome:</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" aria-describedby="lastNameHelp" placeholder="Digite seu último nome">
                                    <small id="lastNameHelp" class="form-text text-muted">Preencha apenas com último nome.</small>
                                </div>

                                <!-- CAMPO EMAIL -->    
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Digite email">
                                    <small id="emailHelp" class="form-text text-muted">Não compartilhe e-mail com ninguém.</small>
                                </div>



                                    <!-- SENHA -->
                                <div class="form-group">
                                    <label for="password">Senha:</label>
                                    <input type="password" name="password"class="form-control col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3" id="password" placeholder="Senha">
                                </div>


                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>

                                  <button type="submit" class="btn btn-danger" name="cadastrar" >Cadastrar</button>
                            </form>
                             
                        
                        </div>
                          
                        <div class="tab-pane fade" id="v-pills-Jogadores" role="tabpanel" aria-labelledby="v-pills-Jogadores-tab">
                            <form method="POST" action ="adm.php">
                            
                                <!-- CAMPO first name -->    
                                <div class="form-group">
                                    <label for="first_name">Primeiro nome:</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" aria-describedby="firstNameHelp" placeholder="Digite seu primeiro nome">
                                    <small id="firstNameHelp" class="form-text text-muted">Preencha apenas com primeiro nome.</small>
                                </div>

                                <!-- CAMPO last name -->    
                                <div class="form-group">
                                    <label for="last_name">Último nome:</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" aria-describedby="lastNameHelp" placeholder="Digite seu último nome">
                                    <small id="lastNameHelp" class="form-text text-muted">Preencha apenas com último nome.</small>
                                </div>

                                <!-- CAMPO EMAIL -->    
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Digite email">
                                    <small id="emailHelp" class="form-text text-muted">Não compartilhe e-mail com ninguém.</small>
                                </div>



                                    <!-- SENHA -->
                                <div class="form-group">
                                    <label for="password">Senha:</label>
                                    <input type="password" name="password"class="form-control col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3" id="password" placeholder="Senha">
                                </div>


                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>

                                  <button type="submit" class="btn btn-danger" name="cadastrar" >Cadastrar</button>
                            </form>
                        </div>
                          
                        
                        <div class="tab-pane fade" id="v-pills-Curiosidades" role="tabpanel" aria-labelledby="v-pills-Curiosidades-tab">
                            <form method="POST" action ="adm.php">
                            
                                <!-- CAMPO first name -->    
                                <div class="form-group">
                                    <label for="first_name">Primeiro nome:</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" aria-describedby="firstNameHelp" placeholder="Digite seu primeiro nome">
                                    <small id="firstNameHelp" class="form-text text-muted">Preencha apenas com primeiro nome.</small>
                                </div>

                                <!-- CAMPO last name -->    
                                <div class="form-group">
                                    <label for="last_name">Último nome:</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" aria-describedby="lastNameHelp" placeholder="Digite seu último nome">
                                    <small id="lastNameHelp" class="form-text text-muted">Preencha apenas com último nome.</small>
                                </div>

                                <!-- CAMPO EMAIL -->    
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Digite email">
                                    <small id="emailHelp" class="form-text text-muted">Não compartilhe e-mail com ninguém.</small>
                                </div>



                                    <!-- SENHA -->
                                <div class="form-group">
                                    <label for="password">Senha:</label>
                                    <input type="password" name="password"class="form-control col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3" id="password" placeholder="Senha">
                                </div>


                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>

                                  <button type="submit" class="btn btn-danger" name="cadastrar" >Cadastrar</button>
                            </form>
                        </div>
                        
                        <div class="tab-pane fade" id="v-pills-ComidasTipicas" role="tabpanel" aria-labelledby="v-pills-ComidasTipicas-tab">
                            <form method="POST" action ="adm.php">
                            
                                <!-- CAMPO first name -->    
                                <div class="form-group">
                                    <label for="first_name">Primeiro nome:</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" aria-describedby="firstNameHelp" placeholder="Digite seu primeiro nome">
                                    <small id="firstNameHelp" class="form-text text-muted">Preencha apenas com primeiro nome.</small>
                                </div>

                                <!-- CAMPO last name -->    
                                <div class="form-group">
                                    <label for="last_name">Último nome:</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" aria-describedby="lastNameHelp" placeholder="Digite seu último nome">
                                    <small id="lastNameHelp" class="form-text text-muted">Preencha apenas com último nome.</small>
                                </div>

                                <!-- CAMPO EMAIL -->    
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Digite email">
                                    <small id="emailHelp" class="form-text text-muted">Não compartilhe e-mail com ninguém.</small>
                                </div>



                                    <!-- SENHA -->
                                <div class="form-group">
                                    <label for="password">Senha:</label>
                                    <input type="password" name="password"class="form-control col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3" id="password" placeholder="Senha">
                                </div>


                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>

                                  <button type="submit" class="btn btn-danger" name="cadastrar" >Cadastrar</button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="v-pills-Videos" role="tabpanel" aria-labelledby="v-pills-Videos-tab">
                            <form method="POST" action ="adm.php">
                            
                                <!-- CAMPO first name -->    
                                <div class="form-group">
                                    <label for="first_name">Primeiro nome:</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" aria-describedby="firstNameHelp" placeholder="Digite seu primeiro nome">
                                    <small id="firstNameHelp" class="form-text text-muted">Preencha apenas com primeiro nome.</small>
                                </div>

                                <!-- CAMPO last name -->    
                                <div class="form-group">
                                    <label for="last_name">Último nome:</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" aria-describedby="lastNameHelp" placeholder="Digite seu último nome">
                                    <small id="lastNameHelp" class="form-text text-muted">Preencha apenas com último nome.</small>
                                </div>

                                <!-- CAMPO EMAIL -->    
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Digite email">
                                    <small id="emailHelp" class="form-text text-muted">Não compartilhe e-mail com ninguém.</small>
                                </div>



                                    <!-- SENHA -->
                                <div class="form-group">
                                    <label for="password">Senha:</label>
                                    <input type="password" name="password"class="form-control col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3" id="password" placeholder="Senha">
                                </div>


                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>

                                  <button type="submit" class="btn btn-danger" name="cadastrar" >Cadastrar</button>
                            </form>
                        </div>
                        
                    </div>
                </div>
           </div>
        
        
        
        <table border='1'>
			<form action="" method="POST">
				<!--
				<tr>
					<td align="center"><b>Nome</b></td>
					<td><input type="text" name="nome">
                        <?php echo $campo_obrigatorio;  ?></td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit"  name="enviar" value="ok">
					</td>
				</tr>
			     -->
			</form>
		</table>
           
        </div>
	</body>    
</html>
