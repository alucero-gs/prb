<?php session_start();
$usuario='juangg';
?>
<!doctype html>
<html lang="es">
<head>
    <title>Nuevo dato</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
		.content {
			margin-top: 20px;
		}
        .back a{

color: black;
font-family: verdana;
padding: 20px;
position: justify;
left: 30%;
}
	</style>
</head>
  <body>
  <div>
          <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #6730af;">
              <a class="navbar-brand" href="/index.html">Notichisme</a>
              <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                  aria-expanded="false" aria-label="Toggle navigation"></button>
              <div class="collapse navbar-collapse" id="collapsibleNavId">
                  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                      <li class="nav-item active">
                          <a class="nav-link" href="../index.html"><img src="../img/home.png" alt="Icono Home">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item active">
                      <text class="nav-link"><?php echo "Bienvenido ".$usuario."@admin"?> </text>
                      </li>
                      <li class="nav-item active">
                          <a class="nav-link" href="../admin/mispubli.php">Mis publicaciones <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item active">
                          <a class="nav-link" href="../admin/publicaciones.php">Usuarios<span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item active">
                          <a class="nav-link" href="../admin/publicaciones.php">Moderadores<span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item active">
                        <a class="nav-link" href="../login/new.php">Log Out <span class="sr-only">(current)</span></a>
                    </li>
                  </ul>
              </div>
          </nav>
      </div>
      <div class="jumbotron center" style="background-image: url(../img/paparazzi.jpg);">
      </div>
      <div class="back"> <a href="mispubli.php" ><img src="../img/back.png" alt="Back">Regresar</a></div>
<div class="container">
		<div class="content">
			<h2>Mis publicaciones &raquo; Nueva publicacion</h2>
			<hr />
            <?php
            $db_host = "localhost";
            $db_user = "root";
            $db_pass = "";
            $db_name = "proyecto";
             
            $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
             
            if(mysqli_connect_errno()){
                echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
            }

			if(isset($_POST['add'])){
				$titulo		         = mysqli_real_escape_string($con,(strip_tags($_POST["titulo"],ENT_QUOTES)));//Escanpando caracteres 
				$contenido	     = mysqli_real_escape_string($con,(strip_tags($_POST["contenido"],ENT_QUOTES)));//Escanpando caracteres 
				$fecha	     = mysqli_real_escape_string($con,(strip_tags($_POST["fecha"],ENT_QUOTES)));//Escanpando caracteres 
		
				$cek = mysqli_query($con, "SELECT autor, titulo, contenido, fecha FROM publicacion");
						$insert = mysqli_query($con, "INSERT INTO publicacion(autor, titulo, contenido, fecha)
															VALUES(1, '$titulo', '$contenido', '$fecha')") or die(mysqli_error());
						if($insert){
							echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Bien hecho! Los datos han sido guardados con éxito.</div>';
						}else{
							echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. No se pudo guardar los datos !</div>';
						}

			}
            ?>
            <form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">Titulo</label>
					<div class="col-sm-4">
						<input type="text" name="titulo" class="form-control" placeholder="Insertar titulo" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Contenido</label>
					<div class="col-sm-4">
						<textarea type="text" name="contenido" class="form-control" placeholder="" required></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Fecha</label>
					<div class="col-sm-4">
						<input type="date" name="fecha" class="form-control" placeholder="Fecha" required>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
                    <a href="mispubli.php" class="btn btn-sm btn-danger">Cancelar</a>
					<input type="submit" name="add" class="btn btn-sm btn-primary" value="Publicar">
					</div>
				</div>
			</form>
		</div>
	</div>
  </body>
</html>