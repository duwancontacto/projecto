<?php

session_start();



function myFunction() {
    
	header("Location: ./main.php");
	 die();
 }
if (isset($_GET['name'])) {
    myFunction();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<style>

		 body{
            height: 100vh; 
            width: 100%;
            overflow: hidden;
        }
		.banner{
			
			height:75vh;
			width:75%;
			background-size: cover;
			background-position:center;
			position:absolute;
			margin: -0.5% 0 0 35%;
			
			
		}
		#1{background:transparent;
		}
		
		.navbar-brand{
			margin: 0 0 0 2%;
			font-family: Calibri;
			font-size:4vh;
			font-weight:800;
			color:#7493e7;
			
		}
		
		.container 1{
			position:absolute;
		}
		
	</style>

	<title>Formulario</title>
	<!-- JavaScript Bundle with Popper -->
	
	
	
	
</head>

<body>

 <nav class="navbar navbar-expand-lg navbar-light bg-light" id="1">
  <a class="navbar-brand" href="#">Zona del trabajador</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <ul class="navbar-nav  ms-lg-auto">
     
      <li class="nav-item">
		
       <a href="./MainUser.php?name=true" class="btn rounded-lg btn-outline-primary">Cerrar sesi??n</a>
	
	</button>
     
    </ul>
    
	
	
</nav>



      <img class="banner" src="./img1.png">
<br/>

 
	
	<div class="row">
		<div class="col-md-2 mx-auto">
		
		
			<a class="card border-primary mb-3" href="./AdminRoutes.php" style="width: 20rem;">
			<div class="card-header text-primary">
			<h5 class="card-title">Registro de rutas:</h5>
			
			</div>
			
  <div class="card-body text-primary">
    
    <p class="card-text">Crear y edita nuevas rutas</p>
  </div>
			</a>
			
			
			<a class="card border-primary mb-3" href="./AdminViewComments.php" style="width: 20rem;" >
			<div class="card-header text-primary">
			<h5 class="card-title">Consulta de comentarios:</h5>
			
			</div>
  <div class="card-body text-primary">
    
    <p class="card-text">Descubre los comentarios de los usuarios</p>
  </div>
			</a>
			
			
		
			
			
			
			
		</div>
		
		<br/>
		<br/>
		
		<div class="col-md-2">
		</div>
		<div class="col-md-7">
		</div>
	</div>
	
	

</body>
</html>