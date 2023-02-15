<?=$cabecera?>

<a class="btn btn-success" href="<?=base_url('crear')?>">Crear una canción</a>
<br/>
<br/>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Nombre Canción</th>
                    <th>Nombre Artista</th>
                    <th>Duración</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($Listado_Canciones as $cancion):?>
                <tr>
                    <td><?php echo $cancion->id_cancion;?></td>
                    <td><?php echo $cancion->Nombre_Cancion;?></td>
                    <td><?php echo $cancion->Nombre_Artista;?></td>
                    <td><?php echo $cancion->duracion;?></td>
                    <td><?php echo $cancion->fecha;?></td>
                    <td>
                    <a href="<?=base_url('editar/'.$cancion->id_cancion);?>" class="btn btn-dark" type="button">Editar</a>
                        <a href="<?=base_url('borrar/'.$cancion->id_cancion);?>" class="btn btn-danger" type="button">Borrar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <div class="mx-auto">
        <a href="<?=base_url('reportes');?>" class="btn btn-info">Generear Reporte Opción 1</a>
        <a href="<?=base_url('reportes2');?>" class="btn btn-info">Generear Reporte Opción 2</a>
        <a href="javascript:window.print()" class="btn btn-info">Generear Reporte Opción 3</a>
        </div>
        <br>
        <br>
 <?$pie?>