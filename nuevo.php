<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
 
    <title>Empresa </title>
  </head>
  <body>
    <div class="container">
    <div class="row">
    <h1>Empleados</h1>
    </div>

    <div class="row">
    <form id="registro" name="registro" method="POST" action="guarda.php" autocomplete="off">
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introduzca su nombre" autofocus required>
  </div>

  <div class="form-group">
    <label for="telefono">Telefono</label>
    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Introduzca su numero de telefono" required>
  </div>

  <div class="form-group">
    <label for="fecha_nacimiento">Fecha de Nacimiento</label>
    <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Introduzca su fecha de nacimiento" required>
  </div>

  <div class="form-group">
    <label for="estado_civil">Estado Civil</label>
    <select name="estado_civil" name="estado_civil" class="form-control">
        <option value="SOLTERO">SOLTERO</option>
        <option value="CASADO">CASADO</option>
        <option value="OTRO">OTRO</option>
    </select>
    </div>

    <div class="form-group">
        <button class="btn btn-primary" id="guardar" name="guardar" type="submit">Guardar</button>
    </div>
</form>
    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>