<?php
include("conexion.php");
?>
<?php session_start();
$usuario='juangg';
?>
<!doctype html>
<html lang="es">
  <head>
    <title>Detalle de datos</title>
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
                          <a class="nav-link" href="../admin/usuarios.php">Usuarios<span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item active">
                          <a class="nav-link" href="../admin/moderadores.php">Moderadores<span class="sr-only">(current)</span></a>
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
  <div class="container">
		<div class="content">
			<h2>Datos de la publicación &raquo; Detalles</h2>
			<hr />
			<?php
			// escaping, additionally removing everything that could be (html/javascript-) code
			$nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
			
			$sql = mysqli_query($con, "SELECT * FROM publicacion WHERE id='$nik'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: index.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			
			if(isset($_GET['aksi']) == 'delete'){
				$delete = mysqli_query($con, "DELETE FROM publicacion WHERE id='$nik'");
				if($delete){
					echo '<div class="alert alert-danger alert-dismissable">><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil dihapus.</div>';
				}else{
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal dihapus.</div>';
				}
			}
			?>
			<table class="table table-striped table-condensed">
				<tr>
					<th>Titulo:</th>
					<td><?php echo $row['titulo']; ?></td>
				</tr>
				<tr>
					<th>Contenido:</th>
					<td><?php echo $row['contenido']; ?></td>
				</tr>
				<tr>
					<th>Fecha de publicación</th>
					<td><?php echo $row['fecha']; ?></td>
				</tr>
				
			</table>
			<a href="publicaciones.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Regresar</a>
		</div>
	</div>

  </body>
</html>