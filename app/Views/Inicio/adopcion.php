<?php foreach ($mascotas as $mascota) : ?>
    <?php if ($mascota['mascota_id'] == $idMascotaSelect) {
        foreach ($mascotaDatos as $mascotaD) :
            if ($mascota['mascota_id'] == $mascotaD['mascota_id']) {
    ?>

                <div class="container">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nombre De La Mascota</label>
                                <input type="text" class="form-control" name="idMascota"  placeholder="<?= $mascotaD['mascota_id'] ?>" style="display:none">
                                <input type="text" class="form-control" name="idPropietario"  placeholder="<?= $mascotaD['usuario_id'] ?>" style="display:none">
                                <input type="text" class="form-control" name="idAdopante"  placeholder="<?= session('usuario_id') ?>" style="display:none">
                                
                                <input type="text" class="form-control" id="inputEmail4" placeholder="<?= $mascotaD['nombre_mascota'] ?>" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nombre De La Raza</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="<?= $mascotaD['raza_nombre'] ?>" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Descripcion</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <?php foreach($direccionUsuarios as $direccionUsuario): 
                            if($direccionUsuario['usuario_id'] == session('usuario_id'))?>
                        <div class="form-group">
                            <label for="inputAddress2">Address 2</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                        </div>
                        <?php endforeach; ?>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">City</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">State</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputZip">Zip</label>
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Check me out
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </form>
                </div>
    <?php
                break;
            } else {
            }

        endforeach;
        break;
    } ?>
<?php endforeach; ?>