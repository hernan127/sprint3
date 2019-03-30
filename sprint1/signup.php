<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!--<link rel="stylesheet" href="master.css">-->
  <title>Ejemplo formulario</title>
</head>
<body>
  <div class="container">
    <section class="row text-left ">
      <article class="col-12" >
          <legend>
            <h2>Registrarme</h2>
          </legend>
          <form action="" method="POST">
            <br>
            <label for="nombreCompleto">Nombre: </label>
            <input name="nombre" type="text" id="nombre"  placeholder="Ingrese su nombre"/>
            <br>
            <label for="nombreCompleto">Apellido: </label>
            <input name="apellido" type="text" id="apellido" placeholder="Ingrese su apellido" />
            <br>
            <label for="nombreCompleto">Contraseña: </label>
            <input name="apellido" type="text" id="apellido" placeholder="Ingrese una contraseña" />
            <br>
            <input name="apellido" type="text" id="apellido" placeholder="Vuelva a Ingresar su contraseña" />
            <br>
            <br>
            <h4>¿Querés ser proveedor?</h4>
            <input type="radio" name="prov" value="sí">Sí
            <input type="radio" name="prov" value="no">No
            <br>
            <br>
            <label>Observaciones</label>
            <br>
            <textarea id="textarea" name="observaciones" id="vaciones" cols="50"></textarea>
            <br><br>
            <button class="btn-buttom btn-primary" type="submit">Enviar</button>
            <button  class="btn-buttom btn-success" type="reset">Restablecer</button>
          </form>

      </article>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </div>
</body>

</html>
