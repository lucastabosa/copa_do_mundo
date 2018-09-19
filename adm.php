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
                          <a class="nav-link active" id="v-pills-pais-tab" data-toggle="pill" href="#v-pills-pais" role="tab" aria-controls="v-pills-pais" aria-selected="true">País</a>
                          <a class="nav-link" id="v-pills-Selecao-tab" data-toggle="pill" href="#v-pills-selecao" role="tab" aria-controls="v-pills-selecao" aria-selected="false">Seleção</a>
                          <a class="nav-link" id="v-pills-jogadores-tab" data-toggle="pill" href="#v-pills-jogadores" role="tab" aria-controls="v-pills-jogadores" aria-selected="false">Jogadores</a>
                          <a class="nav-link" id="v-pills-curiosidades-tab" data-toggle="pill" href="#v-pills-curiosidades" role="tab" aria-controls="v-pills-curiosidade" aria-selected="false">Curiosidades</a>
                          <a class="nav-link" id="v-pills-comidastipicas-tab" data-toggle="pill" href="#v-pills-comidastipicas" role="tab" aria-controls="v-pills-comidastipicas" aria-selected="false">Comidas típicas</a>
                          <a class="nav-link" id="v-pills-videos-tab" data-toggle="pill" href="#v-pills-videos" role="tab" aria-controls="v-pills-videos" aria-selected="false">Vídeos</a>
                    </div>
                </div>

               <div class="col-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        
                        <div class="tab-pane fade show active" id="v-pills-pais" role="tabpanel" aria-labelledby="v-pills-pais-tab">
                           <?php
                                include "adm_pais.php";
                            ?>
                        </div>
                        
                        <div class="tab-pane fade" id="v-pills-selecao" role="tabpanel" aria-labelledby="v-pills-selecao-tab">
                            <?php
                                include "adm_selecao.php";
                            ?>
                        </div>
                          
                        <div class="tab-pane fade" id="v-pills-jogadores" role="tabpanel" aria-labelledby="v-pills-jogadores-tab">    
                            <?php         
                                include "adm_jogadores.php";
                            ?>  
                        </div>   
                        
                        <div class="tab-pane fade" id="v-pills-curiosidades" role="tabpanel" aria-labelledby="v-pills-curiosidades-tab">    
                            <?php
                                include "adm_curiosidades.php";
                            ?>  
                        </div>
                        
                        <div class="tab-pane fade" id="v-pills-comidastipicas" role="tabpanel" aria-labelledby="v-pills-comidastipicas-tab">
                            <?php
                                include "adm_comidatipica.php";    
                            ?>
                        </div>
                        
                        <div class="tab-pane fade" id="v-pills-videos" role="tabpanel" aria-labelledby="v-pills-videos-tab">
                            <?php
                                include "adm_videos.php";
                            ?>
                        </div>
                        
                    </div>
                </div>
           </div>
        </div>
	</body>    
</html>
