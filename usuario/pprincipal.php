<?php require_once 'include/header.php';?>
<title>Perfil</title>
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
      #td_a{
          width: 25%;
      }
      #td_t{
          width: 30%;
      }
      #td_f{
          width: 30%;
      }
      #td_v{
          width: 15%;
      }
      #v_t{
          text-align: justify;
      }
  </style>
  <body>
      <div>
        <nav class="navbar navbar-expand-sm navbar-dark fixed-top" style="background-color: #6730af;">
            <a class="navbar-brand" href="#"><i class='fas fa-user-alt'></i> Bienvenido Francisco</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="pprincipal.php" class="nav-link"><i class='fas fa-home'></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="npublicacion.php"><i class="fa fa-pencil-square-o"></i> Nueva Publicación</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mpublicaciones.php"><i class="fa fa-newspaper-o"></i> Mis Publicaciones</a>
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
            <h2><i class='fas fa-home'></i>Notichismes</h2>
            <div class="container-fluid" id="contenedor1">
                    <table  class="table table-dark table-striped" id="tb1">

                        <tr>
                            <td id="td_a">Autor</td>
                            <td id="td_t">Titulo</td>
                            <td id="td_f">Fecha</td>
                            <td id="td_v">Ver</td>
                        </tr>

                        <?php
                            require 'include/conexion.php';
                            $sql = "SELECT * FROM publicaciones";
                            $result = mysqli_query($conexion, $sql);
                            while($valor=mysqli_fetch_array($result)){
                        ?>
                        <tr>
                            <td><?php echo $valor['autor'] ?></td>
                            <td id="v_t"><?php echo $valor['titulo'] ?></td>
                            <td><?php echo $valor['fecha'] ?></td>
                            <td><a href="include/vista.php?id=<?php echo $valor['id_p']?>" class="btn btn-primary">Ver</a></td>
            
                        </tr>
                        <?php
                        }
                        ?>
                    </table>
            </div>
        </div>
<?php require_once 'include/footer.php';?>