<?php require_once 'include/header.php';?>
<title>Nueva Publicación</title>
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
  </style>
  <body>
      <div>
        <nav class="navbar navbar-expand-sm navbar-dark fixed-top" style="background-color: #6730af;">
            <a class="navbar-brand" href="#"><i class='fas fa-user-alt'></i> Bienvenido @Usuario</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class='fas fa-home'></i> Home</a>
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
            <h2><i class="fa fa-pencil-square-o"></i> Nueva publicación</h2>
            <button type="button" class="btn btn-primary btn-md"><i class='fas fa-arrow-alt-circle-left'></i> Regresar</button>  
          </div>
<?php require_once 'include/footer.php';?>