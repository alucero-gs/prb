<?php

    include("bd.php");

    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $query = "SELECT * FROM moderadores WHERE id_moderador = $id";
        
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) == 1)
        {
            $row = mysqli_fetch_array($result);
            $titulo = $row['nombre'];
            $autor = $row['apellidos'];
            $precio = $row['edad'];
            $titulo = $row['email'];
            $autor = $row['username'];
            $precio = $row['contra'];
        }
    }

    if(isset($_POST['editar']))
    {
        
        $id = $_GET['id'];
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $precio = $_POST['precio'];
        

        $query = "UPDATE libro SET Titulo = '$titulo', Autor = '$autor', Precio = '$precio' WHERE id_libro = $id";
        mysqli_query($conn, $query);

        $_SESSION['message'] = "Actualizado";
        $_SESSION['message_type'] = "warning";

        header("Location: index.php");
    }

?>

<?php include("header.php"); ?>

<div class="container p-4">

    <div class="row">
    
        <div class="col-md-4 mx-auto">
        
            <div class="card car-body">
            
                <form action="editar.php?id=<?php echo $_GET['id']; ?>" method="POST">

                    <div class="form-group">
                        <input type="text" name="titulo" id="titulo" value ="<?php echo $titulo; ?>" class = "form-control" placeholder ="Actualizar">
                    </div>

                    <div class="form-group">
                        <input type="text" name="autor" id="autor" value ="<?php echo $autor; ?>" class = "form-control">
                    </div>

                    <div class="form-group">
                        <input type="text" name="precio" id="precio" value ="<?php echo $precio; ?>" class = "form-control">
                    </div>

                

                    <button name="editar" id="editar" class ="btn btn-warning btn-block">
                        Actualizar
                    </button>

                </form>

            </div>

        </div>

    </div>

</div>


