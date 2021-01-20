<?php
 require 'conexion.php';
 if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM publicaciones where id_p = $id";
    $result = mysqli_query($conexion, $query);
    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_array($result);
        $autor= $row['autor'];
        $titulo = $row['titulo'];
        $contenido = $row['contenido'];
    }
}
if(isset($_POST['update'])){
    $id = $_GET['id'];
    $autor = $_POST['autor'];
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];
    $fecha = $_POST['fecha'];

    $query = "UPDATE publicaciones set autor = '$autor', titulo = '$titulo', contenido = '$contenido', fecha = '$fecha' WHERE id_p = $id";
    mysqli_query($conexion,$query);
    header("location: ../mpublicaciones.php");
}
?>
<?php require_once 'header.php';?>
<title>Mis Publicaciones</title>
<style>
      #plano{
        margin-top: 0px;
        padding-top: 10px;
        padding-right: 50px;
        padding-left: 50px;
        background-color: rgb(201, 159, 255);
      }
      #c1{
        background-color: white; 
        margin: 50px;
        margin-top: 10px;
        margin-bottom: 0px;
        padding: 200px;
        text-align: center;
      }
      #jb1{
          margin-top: 30px;
          margin-bottom: 0px;
          height: 180px;
      }
      #td_t{
        width: 25%;
      }
      #td_c{
        width: 30%;
      }
      #td_f{
        width: 25%;
      }
      #td_m{
        width: 10%;
      }
  </style>
  <body>
      <div>
        <nav class="navbar navbar-expand-sm navbar-dark fixed-top" style="background-color: #6730af;">
            <a class="navbar-brand" href="#"><i class='fas fa-user-alt'></i> Bienvenido Francisco</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="pprincipal.php"><i class='fas fa-home'></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-pencil-square-o"></i> Nueva Publicación</a>
                </li>
                <li class="nav-item" id="li1">
                    <a class="nav-link" href="#">Log out <i class="fa fa-sign-out"></i></a>
                </li>
            </ul>
        </nav>
      </div>
      <div class="jumbotron jumbotron-fluid" style="background-image: url(include/notichisme.png);" id="jb1">
      </div>
      <div id="plano" class="container-fluid">
          <div class="container" id="c1">
            <h2><i class="fa fa-newspaper-o"></i> Mis Publicaciones</h2>       
            <div class="container-fluid" id="contenedor1">
            <div class="container" id="container5">
                <div class="card card-body" id="card1">
                        <form action="edit.php?id=<?php echo $_GET['id'];?>" method="POST">
                            <div class="form-group" style="display:none;">
                                <input type="text" name="autor" value="<?php echo $autor;?>" class="form-control" autofocus>
                            </div>
                            <div class="form-group">
                                <input type="text" name="titulo" value="<?php echo $titulo;?>" class="form-control" placeholder="Actualiza Titulo" autofocus>
                            </div>
                            <div class="form-group">
                                <input type="text" name="contenido" value="<?php echo $contenido;?>" class="form-control" placeholder="Actualiza Contenido" autofocus>
                            </div>
                            <div class="form-group" style="display:none;">
                                <input type="text" name="fecha" value="<?php echo date("Y-m-d");?>" class="form-control" autofocus>
                            </div>
                            <button class="btn btn-success" name="update">Actualizar</button>
                        </form>
                </div>
            </div>
          </div>
<?php require_once 'footer.php';?>