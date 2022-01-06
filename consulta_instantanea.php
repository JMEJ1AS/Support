<html lang="es">

	<head>
		
		<title>Consultar BD AJAX</title>
		
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		
		<!--<link href="css/estilos.css" rel="stylesheet">-->

		<link href="bootswatch/minty/bootstrap.min.css" rel="stylesheet">
		
		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">-->
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

		<script type="text/javascript">

			function tiempoReal(){
				
				var tabla = $.ajax({
					
					url:'tablaConsulta.php',
					
					dataType:'text',
					
					async:false
				
				}).responseText;

				document.getElementById("miTabla").innerHTML = tabla;
			
			}
			
			setInterval(tiempoReal, 1000);
			
		</script>
		
	</head>
	
	<body>

	<?php include("resources/navbar.php"); ?>
		
	<div class="container">	

		<p>&nbsp;</p>

		<p>&nbsp;</p>

		<ol class="breadcrumb">
  
  			<li class="breadcrumb-item"><a href="#">Home</a></li>
  
  			<li class="breadcrumb-item active">Library</li>

		</ol>

		<div class="row" id="miTabla"></div>  
		
		<footer id="footer"></footer>

      	<script src="JS/jquery/dist/jquery.min.js"></script>
    
    	<script src="JS/bootstrap.bundle.min.js"></script>
    
    	<script src="JS/custom.js"></script>
	
	</body>

</html>





