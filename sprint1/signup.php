<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
  <title>Registro</title>
</head>
<body>
  <div class="container">
    <section class="row text-left ">
      <article class="col-12">
          <legend>
            <h2>Registrarme</h2>
          </legend>
          <form action="" method="POST">
            <br>
            <label for="nombre">Nombre: </label>
            <input name="nombre" type="text" id="nombre" placeholder="Ingrese su nombre" required/>
            <br>
            <label for="nombre">Usuario: </label>
            <input name="nombre" type="text" id="nombre" placeholder="Ingrese un usuario" required/>
            <br>
            <label for="email">E-mail: </label>
            <input name="email" type="email" id="email" placeholder="Ingrese su email" required/>
            <br>
            <label for="pass">Contraseña: </label>
            <input name="pass" type="password" id="pass" placeholder="Ingrese una contraseña" required/>
            <label for="rptpass">Confirmar contraseña: </label>
            <input name="rptpass" type="password" id="rptpass" placeholder="Confirme contraseña" required/>
            <br>
            <br>
            <label for="proveedor">¿Querés ser proveedor?</label>
            <br>
            <input type="radio" name="proveedor" id="prov" value="sí">Sí
            <input type="radio" name="proveedor" id="prov" value="no">No
            <br>
            <br>
            <label for="tel">Teléfono:</label>
            <br>
            <input type="tel" name="tel" value="" placeholder="011-1234-5678">
            <br>
            <label for="horario">Horario de contacto:</label>
            <br>
            <input type="checkbox" name="horario" value="">9 a 13hs
            <br>
            <input type="checkbox" name="horario" value="">13 a 17hs
            <br>
            <input type="checkbox" name="horario" value="">17 a 21hs
            <br>
            <br>
            <div class="clearfix">
            <button type="button" class="cancelbtn">Cancelar</button>
            <button type="submit" class="signupbtn">Registrarme</button>
            </div>
          </form>
      </article>
    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </div>
</body>

</html>
