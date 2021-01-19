<?php require_once 'include/header.php';?>
<title>Perfil</title>
<style>
      #plano{
        height: 900px;
        margin-top: 0px;
        padding-top: 10px;
        padding-right: 50px;
        padding-left: 50px;
        background-color: rgb(201, 159, 255);
      }
      #c1{
          height: 100%;
        background-color: white; 
        margin: 50px;
        margin-top: 10px;
        margin-bottom: 0px;
        padding: 100px;
        text-align: center;
      }
      #jb1{
          margin-top: 30px;
          margin-bottom: 0px;
          height: 180px;
      }
      #td{
          font-size: 13px;
      }
  </style>
  <body>
      <div>
        <nav class="navbar navbar-expand-sm navbar-dark fixed-top" style="background-color: #6730af;">
            <a class="navbar-brand" href="#"><i class='fas fa-user-alt'></i> Bienvenido Francisco</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class='fas fa-home'></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-pencil-square-o"></i> Nueva Publicación</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-newspaper-o"></i> Mis Publicaciones</a>
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
            <h2>Publicaciones mas Recientes</h2>
            <div class="container-fluid" id="contenedor1">
                    <table  class="table table-dark table-striped" id="tb1">

                        <tr>
                            <td>Autor</td>
                            <td>Titulo</td>
                            <td>Contenido</td>
                            <td>Fecha</td>
                        </tr>

                        <?php
                            require 'include/conexion.php';
                            $sql = "SELECT * FROM publicaciones";
                            $result = mysqli_query($conexion, $sql);
                            while($valor=mysqli_fetch_array($result)){
                        ?>
                        <tr>
                            <td><?php echo $valor['autor'] ?></td>
                            <td><?php echo $valor['titulo'] ?></td>
                            <td><?php echo $valor['contenido'] ?></td>
                            <td><?php echo $valor['fecha'] ?></td>
                            <td><button type="button" class="btn btn-success">Comentarios</button></td>
            
                        </tr>
                        <?php
                        }
                        ?>
                    </table>
            </div>
        </div>
<?php require_once 'include/footer.php';?>