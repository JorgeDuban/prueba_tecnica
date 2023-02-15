<?=$cabecera?>
    Formulario Crear

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ingresar datos de la canción</h5>
            <p class="card-text">

            <form method="post" action="<?=base_url('guardar')?>">


                <div class="form-group">
                    <label for="id_artista">Id Artitas</label>
                    <input id="id_artista" type="text" name="id_artista" class="form" placeholder="Digite el id del artista" required autocomplete="off">
                </div>

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input id="nombre" value="<?=old('nombre')?>" class="form-control" type="text" name="nombre" placeholder="Digite el nombre de la canción" required autocomplete="off">
                </div>

                <div class="form-group">
                    <label for="duracion">Duración</label>
                    <input id="duracion" value="<?=old('duracion')?>" class="form-control" type="text" name="duracion" placeholder="Digite la duración de la canción en minutos, Ejem: 3:30" required autocomplete="off">
                </div>

                <div class="form-group">
                    <label for="fecha">Fecha</label>
                    <input id="fecha" value="<?=old('fecha')?>" type="date" name="fecha" required>
                </div>
                <button class="btn btn-success" type="submit">Registrar</button>
                <a href="<?=base_url('listar');?>" class="btn btn-info">Cancelar</a>
            </form>

            </p>
        </div>
    </div> 
<?=$pie?>