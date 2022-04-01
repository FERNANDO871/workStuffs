
<?php
session_start();
?>   

<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  
    <title>Panel de Control</title>

    <!-- Bootstrap core CSS -->

  <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>

   <link href="css/bootstrap.css" rel="stylesheet"> 
   <link href="css/estilos.css" rel="stylesheet"> 
   
  
  </head>

  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Panel de Control</a>
          <label class="navbar-brand"><?php echo "Usuario:". $_SESSION['email']; ?></label>
        </div><br>

    <!--    <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="../usuarios/index.php">Clientes</a></li>
            <li><a href="../inventario/index.php">Inventario</a></li>
            <li><a href="#">Entradas</a></li>
            <li><a href="#">Ventas</a></li>
          </ul>
        </div> -->
      </div>
    </nav>



    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor" 
              class="bi bi-gear-fill" viewBox="0 0 16 16">
  <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
</svg> Panel de Control<small> Administración</small></h1>
          </div>
          <div class="col-md-2">
              <div class="dropdown crear">
                  <a class="btn btn-default dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Contenido
                    <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a class="dropdown-item" href="../usuarios/index.php">Usuarios</a></li>
                    <li><a class="dropdown-item" type="button" style="cursor: pointer;" data-toggle="modal" data-target="#addSale">Agregar Venta</a></li>
               <!--     <li><a class="dropdown-item" href=""></a></li> -->
                    <li><a class="dropdown-item" href="../inventario/index.php">Inventario</a></li>
                  </ul>
              </div>
          </div>
        </div>
      </div>
    </header>


    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active">Panel de Control</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
                  <a href="#" class="list-group-item active color-principal">
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
  <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
</svg>    Pestañas administrativas
                  </a>
                  <a href="../usuarios/index.php" class="list-group-item"><span class="glyphicon glyphicon-user"> Clientes <span class="badge">39</span>
                  </span></a>
                  <a href="../inventario/index.php" class="list-group-item"><span class="glyphicon glyphicon-copy"> Inventario <span class="badge">55</span></span></a>
                  <a href="#" class="list-group-item"><span class="glyphicon glyphicon-log-in"> Entradas
                  <span class="badge">80</span></span></a>

                  <div class="well">
                    <h5>Primer Ejemplo</h5>
                    <div class="progess">
                      <div class="barra-progreso" role="progessbar" aria-valuenow="60" aria-valuemin="0"
                      aria-valuemax="100" style="width: 40%;">40%</div>
                    </div>
                        <h5>Segundo ejemplo</h5>
                    <div class="progess">
                      <div class="barra-progreso" role="progessbar" aria-valuenow="60" aria-valuemin="0"
                      aria-valuemax="100" style="width: 75%;">75%</div>
                    </div>
                  </div>
            </div>

          </div>
        
            <div class="col-md-9">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Vista Rápida</h3>
                </div>
                <div class="panel-body">
                  <div class="col-md-3">
                    <div class="well dash-box">
                      <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 58</h2>
                      <h4>Usuarios</h4>
                    </div>
                  </div>

                   <div class="col-md-3">
                    <div class="well dash-box">
                      <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 33</h2>
                      <h4>Inventario</h4>
                    </div>
                  </div>


                  <div class="col-md-3">
                    <div class="well dash-box">
                      <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 33</h2>
                      <h4>Comentarios</h4>
                    </div>
                  </div>

                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"> 1336</span> 
                    </h2>
                      <h4>Visitantes</h4>
                    </div>
                  </div>

                </div>
              </div>

                <div class="panel panel-default">
                    <div class="panel-heading">Ultimas Ventas</div>
                    <div class="panel-body">
                      <table class="table table-striped table-hover">
                        <tr>
                          <th>Id Producto</th>
                          <th>Nombre de Producto</th>
                          <th>Fecha de Venta</th>
                          <th>Cantidad Vendida</th>
                        </tr>
                        <tr>
                          <td>0001</td>
                          <td>Crema Ozonizada</td>
                          <td>12/01/2022</td>
                          <td>20</td>
                        </tr>
                      </table>
                    </div>
                </div>

            </div>

        </div>
      </div>

        </section>
       
       <footer id="footer">
         <p>Copyright Ozonium México, &copy; 2022</p>
       </footer>
     
    <!--Modal-->

    <div class="modal fade" id="addSale" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form>
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Agregar Venta</h4>
          </div>
          <div class="modal-body">
             <div class="form-group">
                <label for="">Id Producto</label>
                <input type="text" class="form-control" id="" placeholder="Titulo de Página">
            </div>

            <div class="form-group">
                <label for="">Fecha de Venta</label>
                <input type="text" class="form-control" id="" placeholder="Fecha Venta">
            </div>

            <div class="form-group">
                <label for="">Nombre de Producto</label>
                <input type="text" class="form-control" id="" placeholder="Nombre Producto">
            </div>

             <div class="form-group">
                <label for="">Descripción Producto</label>
                <input name="editor1" class="form-control" placeholder="Información Producto">
                </input>
            </div>

            <div class="checkbox">
              <label for="">
                <input type="checkbox" value="tramitando">Tramitando
              </label>
            </div>

            <div class="checkbox">
              <label for="">
                <input type="checkbox" value="vendido">Vendido
              </label>
            </div>

            <div class="checkbox">
              <label for="">
                <input type="checkbox" value="cancelado">Cancelado
              </label>
            </div>

            <div class="form-group">
                <label for=""> Id Cliente</label>
                <input type="text" class="form-control" placeholder="Agregar Id.">
            </div>

            <div class="form-group">
                <label for="">Cantidad Vendida</label>
                <input type="text" class="form-control" placeholder="Agregar Cantidad Vendida">
                </input>
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary">Guardar</button>
          </div>
    </form>
    </div>
  </div>
</div>

    <!--Termina Modal-->


    <script type="text/javascript">
      // Always provide paths that start with a slash character ("/").
      CKEDITOR.replace( 'editor1', {
      } );
    </script>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
