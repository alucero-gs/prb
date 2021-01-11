<!doctype html>
<html lang="es">
  <head>
    <title>Registrarse</title>
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
                      <li class="nav-item">
                          <a class="nav-link" href="login/formulario.php"><img src="../img/login.png" alt="Icono login">Login</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"><img src="../img/create.png" alt="Icono login">Crear cuenta</a>
                    </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                      <input class="form-control mr-sm-2" type="text" placeholder="Buscar en el sitio">
                      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Buscar</button>
                  </form>
              </div>
          </nav>
      </div>
      <div class="jumbotron center" style="background-image: url(../img/paparazzi.jpg);">
      </div>
                <div class="col-md-6 login-form-2">
                    <h3>Bienvenido a Notichisme!</h3>
                    <h5>Por favor, inicia sesión</h5>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Introducir email" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Introducir contraseña" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Entrar" />
                            <input type="new" class="btnSubmit" value="Registrarse" style="text-align: center;" />
                        </div>
                        <div class="form-group">

                            <a href="#" class="ForgetPwd" value="Login">Ha olvidado la contraseña?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

      
   
  </body>
</html>