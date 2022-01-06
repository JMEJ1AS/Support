<?php

include "config/conexion.php";

/////////////////////// CONSULTA A LA BASE DE DATOS ////////////////////////

$resCorreos=$conexion->query("SELECT * FROM correos ORDER BY imapID DESC");

	while ($filaCorreo = $resCorreos->fetch_array(MYSQLI_BOTH)){


		echo"<div class='col-lg-4'>

    			<div class='card bg-light mb-3'>
                	
                	<div class='card-header'>

                		<button type='button' class='btn btn-".$filaCorreo['etiqueta']." btn-lg'>

                			<h2>".$filaCorreo['iniciales']."</h2>

                		</button>

                	</div>
                
                	<div class='card-body'>
                  
                  		<h4 class='card-title'>".$filaCorreo['destinatario']."</h4>
                  
                  		<p class='card-text'>".$filaCorreo['asunto']."</p>

                	
                	</div>
              
              	</div>

            </div>";

    }

?>