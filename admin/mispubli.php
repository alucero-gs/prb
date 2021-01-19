<?php include("conexion.php");?>
<?php session_start();
$usuario='juangg';
?>
<!doctype html>
<html lang="es">
  <head>
    <title>Perfil: Administrador</title>
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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <style>
.login-form-2{
    width: 500px;
    padding: 40px;
    position: absolute;
    left: 30%;
    background: #6730af;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-2 h3,h5{
    text-align: center;
    color: #fff;
}
.login-container form{
    padding: 10%;
}
.btnSubmit
{
    width: 30%;
    border-radius: 1rem;
    padding: 1.5%;
    border: none;
    cursor: pointer;
}
.login-form-2 .btnSubmit{
    font-weight: 600;
    color: #6730af;
    background-color: #fff;
}
.login-form-2 .ForgetPwd{
    color: #fff;
    font-weight: 600;
    text-decoration: none;
}
.login-form-2 label{
    text-align: center;
    color: #fff;
}
.back a{

    color: black;
    font-family: verdana;
    padding: 60px;
    position: justify;
    left: 30%;
}
.nueva a{
    padding: 10px;
    position: absolute;
    left: 45%;
}

  </style>
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
                          <a class="nav-link" href="../admin/publicaciones.php">Publicaciones <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item active">
                          <a class="nav-link" href="../admin/usuarios.php">Usuarios<span class="sr-only">(current)</span></a>
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
      <?php
			if(isset($_GET['aksi']) == 'delete'){
				// escaping, additionally removing everything that could be (html/javascript-) code
				$nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
				$cek = mysqli_query($con, "SELECT * FROM publicacion WHERE id='$nik'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> No se encontraron datos.</div>';
				}else{
					$delete = mysqli_query($con, "DELETE FROM publicacion WHERE id='$nik'");
					if($delete){
						echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Datos eliminado correctamente.</div>';
					}else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error, no se pudo eliminar los datos.</div>';
					}
				}
			}
        ?>
        <div class="back"> <a href="publicaciones.php" ><img src="../img/back.png" alt="Back">Regresar</a></div>
    <div class="container text-center" id="container5">
      <h3>Mis Publicaciones</h3>
    </div>
    <div class="table-responsive">
			<table class="table table-striped table-bordered">
				<tr>
                    <th>Titulo</th>
                    <th>Comentario</th>
                    <th>Fecha</th>
                    <th></th>
                    <th></th>
                </tr>

				<?php
                    //$sql = mysqli_query($con, "SELECT * FROM publicacion ORDER BY id ASC");
                    $sql = mysqli_query($con, "SELECT * FROM publicacion where autor=1 ORDER BY id ASC");
                if (!$sql || mysqli_num_rows($sql) == 0){
                    
					echo '<tr><td colspan="8">No hay datos.</td></tr>';
				}else{
					$no = 1;
					while($row = mysqli_fetch_assoc($sql)){
						echo '
						<tr>
                            <td><a href="mispubli_r.php?nik='.$row['id'].'" style="color:black;"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> '.$row['titulo'].'</a></td>
                            <td>'.$row['contenido'].'</td>
                            <td>'.$row['fecha'].'</td>';
						echo '
							<td>
                                <a href="mispubli_u.php?nik='.$row['id'].'" title="Editar datos" class="btn btn-secondary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Editar</a>
                            </td>
                            <td>
								<a href="mispubli.php?aksi=delete&nik='.$row['id'].'" title="Eliminar" onclick="return confirm(\'Esta seguro de borrar los datos de la publicación '.$row['titulo'].'?\')" class="btn btn-secondary btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Eliminar</a>
							</td>
						</tr>
						';
						$no++;
					}
				}
				?>
			</table>
        </div>
        <div class="nueva">
        <a href="mispubli_c.php" title="Nueva publicacion" class="btn btn-secondary "><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Nueva publicación</a>
        </div>
    
    </body>
</html>
