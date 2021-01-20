<?php require_once 'header.php';?>
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
      #ch{
          font-size: 30px;
      }
      #cb{
          font-size: 20px;
          text-align: justify;
      }
      #cf{
          font-size: 20px;
      }
      #tb1{
         visibility: hidden;
      }
      #btn2{
        visibility: hidden;
      }
  </style>
  <body>
      <div>
        <nav class="navbar navbar-expand-sm navbar-dark fixed-top" style="background-color: #6730af;">
            <a class="navbar-brand" href="#"><i class='fas fa-user-alt'></i> Bienvenido Francisco</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="../pprincipal.php" class="nav-link"><i class='fas fa-home'></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../npublicacion.php"><i class="fa fa-pencil-square-o"></i> Nueva Publicación</a>
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
      <div class="jumbotron jumbotron-fluid" style="background-image: url(notichisme.png);" id="jb1">
      </div>
      <div id="plano" class="container-fluid">
        <div class="container" id="c1">
            <div class="container">
                <div class="card">
                    <?php
                    require 'conexion.php';
                    if(isset($_GET['id'])){
                     $id = $_GET['id'];
                    $query = "SELECT * FROM publicaciones where id_p = $id";
                    $result = mysqli_query($conexion, $query);
                    if(mysqli_num_rows($result)==1){
                    $row = mysqli_fetch_array($result);
                    $autor = $row['autor'];
                    $titulo = $row['titulo'];
                    $contenido = $row['contenido'];
                    $fecha = $row['fecha'];
                    ?>
                    <div class="card-header" id="ch"><?php echo $titulo;?></div>
                    <div class="card-body" id="cb"><?php echo $contenido?></div> 
                    <div class="card-footer" id="cf"><pre>Autor: <?php echo $autor;?>       Fecha de publicación: <?php echo $fecha?></pre></div>
                    <?php
                    }
                    ?>
                    <?php
                        }
                    ?>
                </div>
                <button type="button" class="btn btn-primary btn-block" id="btnl" onclick="document.getElementById('tb1').style.visibility = 'visible'; document.getElementById('btnl').style.visibility = 'hidden'; document.getElementById('btn2').style.visibility = 'visible'; document.getElementById('card1').style.display = 'block';">Mostrar Comentarios</button>
                <button type="button" class="btn btn-primary btn-block" id="btn2" onclick="document.getElementById('tb1').style.visibility = 'hidden'; document.getElementById('btn2').style.visibility = 'hidden';document.getElementById('btnl').style.visibility = 'visible';document.getElementById('card1').style.display = 'none';">Ocultar Comentarios</button>
                <table  class="table table-dark table-striped" id="tb1">

                    <tr>
                        <td id="td_a">Usuario</td>
                        <td id="td_t">Comentario</td>
                        <td id="td_f">Fecha</td>
                    </tr>

                    <?php
                        if(isset($_GET['id'])){
                        $id = $_GET['id'];
                        require 'conexion.php';
                        $sql = "SELECT * FROM comentarios where id_p = $id";
                        $result = mysqli_query($conexion, $sql);
                        while($valor=mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?php echo $valor['usuario'] ?></td>
                        <td id="v_t"><?php echo $valor['comentario'] ?></td>
                        <td><?php echo $valor['fecha'] ?></td>
                       
                    </tr>
                    <?php
                    }
                    ?>
                    <?php
                    }
                    ?>
                </table>
                <div class="card card-body" style="display:none;" id="card1">
                <form action="guardar.php" method="POST">
                <div class="form-group" style="display:none;">
                    <input type="text" name="id_p" class="form-control" value="<?php echo $id ?>" autofocus>
                </div>
                <div class="form-group" style="display:none;">
                    <input type="text" name="usuario" class="form-control" value="Francisco" autofocus>
                </div>
                <div class="form-group">
                    <input type="text" name="comentario" class="form-control" placeholder="Ingresa algún comentario" autofocus>
                </div>
                <div class="form-group" style="display:none;">
                    <input type="text" name="fecha" class="form-control" value="<?php echo date("Y-m-d")?>" autofocus>
                </div>
                <input type="submit" class="btn btn-success btn-block" name="guardar" value="Comentar">
            </form>
        </div>
            </div>
        </div>
<?php require_once 'footer.php';?>