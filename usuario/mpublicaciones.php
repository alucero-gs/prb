<?php require_once 'include/header.php';?>
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
                    <a class="nav-link" href="npublicacion.php"><i class="fa fa-pencil-square-o"></i> Nueva Publicación</a>
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
                    <table  class="table table-dark table-striped" id="tb1">

                        <tr>
                            <td id="td_t">Titulo</td>
                            <td id="td_c">Contenido</td>
                            <td id="td_f">Fecha</td>
                            <td id="td_m">Modificar</td>
                            <td id="td_m">Eliminar</td>
                        </tr>

                        <?php
                            require 'include/conexion.php';
                            $sql = "SELECT * FROM publicaciones where autor = 'Francisco'";
                            $result = mysqli_query($conexion, $sql);
                            while($valor=mysqli_fetch_array($result)){
                        ?>
                        <tr>
                          <td><?php echo $valor['titulo'] ?></td>
                          <td><?php echo $valor['contenido'] ?></td>
                          <td><?php echo $valor['fecha'] ?></td>
                          <td><a href="include/edit.php?id=<?php echo $valor['id_p']?>" class="btn btn-success"><i class='fas fa-edit'></i></a></td>
                          <td><a href="include/delete.php?id=<?php echo $valor['id_p']?>" class="btn btn-danger"><i class="material-icons">delete</i></a></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </table>
            </div>
          </div>
<?php require_once 'include/footer.php';?>