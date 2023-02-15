<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar Reporte PDF</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
<br/>
<br/>
<h1 class="card-body text-center">CANCIONES</h1>
<div class="container">
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Nombre de la Canción</th>
                    <th>Nombre del Artista</th>
                    <th>Duración</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($Generar_reporte as $cancion):?>
                <tr>
                    <td><?php echo $cancion->id_cancion;?></td>
                    <td><?php echo $cancion->Nombre_Cancion;?></td>
                    <td><?php echo $cancion->Nombre_Artista;?></td>
                    <td><?php echo $cancion->duracion;?></td>
                    <td><?php echo $cancion->fecha;?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <a href="javascript:window.print()" class="btn btn-info">#</a>

</div>
</body>
</html>

