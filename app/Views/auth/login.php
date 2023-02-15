<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- Start of  Zendesk Widget script -->
    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=e3abfd12-dfb9-4b71-b7f6-4f4383ddd455"> </script>
    <!-- End of  Zendesk Widget script -->
    <title>Login</title>
</head>
<body class="m-0 vh-100 row justify-content-center aling-items-center">
<div class="container col-auto p-5 text-center">
          <h4>Ingrese datos de logueo</h><hr>
    <?php if(session('mensaje')){?>
    <div class="alert alert-danger" role="alert">
        <?php
        //Se retorna un mensaje si la alerta se activa
        echo session('mensaje');
        ?>
    </div>
    <?php
    }
    ?>

    <form method="post" action="<?=base_url('logueo')?>">
    <?=session('mensaje')?>
      <div class="form-group">
        <label for="usuario">Usuario</label>
        <input id="usuario" class="form-control" type="text" name="usuario" placeholder="Ingrese usuario" autocomplete="off">
      </div>

      <div class="form-group">
        <label for="password">Contraseña</label>
        <input id="password" class="form-control" type="password" name="password" placeholder="Ingrese contraseña" >
      </div>
      <button class="btn btn-success" type="submit">Ingresar</button>
      <a href="<?=base_url('crear_usuario');?>" class="btn btn-info">Registrarse</a>
    </form>
</div>
</body>
</html>