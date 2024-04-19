<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registrarse.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Index</title>
    
</head>
<body>
    <body background="libros.jpg">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand me-5" href="">BookStore</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
                
              </li>
            </ul>
          </div>
        </div>
      </nav>

      
      <form action="registro_usuario.php" method="POST">
  <section class="form-register">
    <h4>Registrar usuario</h4>
    <label><b>Nombre completo:</b></label>  
    <input class="controls" type="text" name="nombre" id="nombre">
    <label><b>DUI:</b></label> 
    <input class="controls" type="text" name="dui" id="dui_usuario">
    <label><b>Dirección:</b></label> 
    <input class="controls" type="text" name="direccion" id="direccion">
    <label><b>Contraseña:</b></label> 
    <input class="controls" type="password" name="password" id="password">
    <label><b>Rol:</b></label>
    <select class="controls" name="rol" id="rol">
      <option value="usuario">Usuario general</option>
      <option value="administrador">Administrador</option>
    </select>
    <input class="buttom" type="submit" value="Registrar">
    <p><a href="{{ url('/login') }}">¿Ya tengo cuenta?</a></p> 
  </section>
</form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
</body>
</html>