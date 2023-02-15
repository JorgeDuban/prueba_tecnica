<?=$cabecera?>
<h3>Formulario para Editar</h3> 

<div class="card">
        <div class="card-body">
            <h5 class="card-title">Ingrese datos de la canción</h5>
            <p class="card-text">

                <form method="post" action="<?=base_url('/actualizar')?>" enctype="multipart/form-data">

                    <input type="hidden" name="id_cancion" value="<?=$cancion['id_cancion']?>">
                    <div class="form-group">
                        <label for="id_artista">Id Artitas</label>
                        <input id="id_artista" value="<?=$cancion['id_artista']?>" class="form-control" type="text" name="id_artista" placeholder="Digite el id del artista" required autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input id="nombre" value="<?=$cancion['nombre']?>" class="form-control" type="text" name="nombre" placeholder="Digite el nombre de la canción" required autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="duracion">Duración</label>
                        <input id="duracion" value="<?=$cancion['duracion']?>" class="form-control" type="text" name="duracion" placeholder="Digite la duración de la canción" required autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="fecha">Fecha</label>
                        <input id="fecha" value="<?=$cancion['fecha']?>" class="form-control" type="date" name="fecha" required>
                    </div>
                    <button class="btn btn-success" type="submit">Actualizar</button>
                    <a href="<?=base_url('listar');?>" class="btn btn-info">Cancelar</a>
                </form>

            </p>
        </div>
</div> 
<?=$pie?>