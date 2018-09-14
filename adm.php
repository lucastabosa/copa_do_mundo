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
                           <?php
                                include "adm_pais.php";
                            ?>
                        </div>
                        
                        <div class="tab-pane fade" id="v-pills-Selecao" role="tabpanel" aria-labelledby="v-pills-Selecao-tab">
                            <?php
                                include "adm_selecao.php";
                            ?>
                        </div>
                          
                        <div class="tab-pane fade" id="v-pills-Jogadores" role="tabpanel" aria-labelledby="v-pills-Jogadores-tab">    
                            <?php         
                                include "adm_jogadores.php";
                            ?>  
                        </div>   
                        
                        <div class="tab-pane fade" id="v-pills-Curiosidades" role="tabpanel" aria-labelledby="v-pills-Curiosidades-tab">    
                            <?php
                                include "adm_curiosidades.php";
                            ?>  
                        </div>
                        
                        <div class="tab-pane fade" id="v-pills-ComidasTipicas" role="tabpanel" aria-labelledby="v-pills-ComidasTipicas-tab">
                            <?php
                                include "adm_comidatipica.php";    
                            ?>
                        </div>
                        
                        <div class="tab-pane fade" id="v-pills-Videos" role="tabpanel" aria-labelledby="v-pills-Videos-tab">
                            <?php
                                include "adm_videos.php";
                            ?>
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
