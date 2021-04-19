<br>
<br>
<?php foreach ($mascotas as $mascota) : ?>
  <?php if ($mascota['mascota_id'] == $idMascotaSelect) {
    foreach ($mascotaDatos as $mascotaD) :
      if ($mascota['mascota_id'] == $mascotaD['mascota_id']) {
  ?>
        <div class="container">
          <div class="main-body">
            <link rel="stylesheet" href="<?= base_url() ?>/assets/css/profile.css">
            <div class="row gutters-sm">
              <div class="col-md-4 mb-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                      <img src="<?= base_url() ?>/assets/img/<?= $mascotaD['imagen'] ?>" class="rounded-circle" width="150">
                      <div class="mt-3">
                        <h4> <?= $mascotaD['nombre']." ". $mascotaD['apellido']; ?></h4>

                        <p class="text-secondary mb-1">Miembro desdel <?= $mascotaD['fecha_registro']; ?></p>

                        <button class="btn btn-outline-primary">Enviar Mensaje</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0"></h6>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Correo</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <?= $mascotaD['correo']; ?>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Telefono</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <?= $mascotaD['telefono']; ?>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Celular</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <?= $mascotaD['celular']; ?>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Direccion</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <?= $mascotaD['calle'] . ", " . $mascotaD['colonia'] . ", " . $mascotaD['codigo_postal'] . ", " . $mascotaD['direccion_estado']; ?>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

              <!-- INFO MASCOTA--->
              <div class="col-md-8">
                <div class="card">
                  <div class="card-header">
                    <h4>Datos Personales</h4>
                  </div>
                  <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                      <img src="<?= base_url() ?>/assets/images/<?= $mascotaD['mascota_imagen']; ?>" class="rounded-circle" width="150">
                      <div class="mt-3">
                        <h4> <?= $mascotaD['nombre_mascota']; ?></h4>
                        <p class="text-secondary mb-1">Dia de nacimiento: <?= $mascotaD['mascota_nacimiento']; ?></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h4>Datos Biologicos</h4>
                  </div>
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0"></h6>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Raza</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <?= $mascotaD['raza_nombre']; ?>
                        </div>
                      </div>

                      <hr>

                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Genero</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <?php
                          if ($mascotaD['mascota_genero'] == 'M') {
                            echo "Macho";
                          } else {
                            echo "Hembra";
                          }
                          ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Edad</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <?php
                          $dia_actual = date("Y-m-d");
                          $edad_actual = date_diff(date_create($mascotaD['mascota_nacimiento']), date_create($dia_actual));
                          echo $edad_actual->format('%y Años %m Meses %d Dias');
                          ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Especie</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <?=
                          $mascotaD['tipoMascota_nombre']
                          ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Estatura</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <?= $mascotaD['mascota_tamano']; ?>
                        </div>
                      </div>

                      <hr>

                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Estado</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <?= $mascotaD['mascota_estado'] ?>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h4>Descripcion</h4>
                  </div>

                  <div class="card-body">
                    <p class="card-text"><?= $mascotaD['mascota_descripcion'] ?></p>
                  </div>
                </div>
                <div class="d-flex flex-column align-items-center text-center">
                  <div class="mt-3">
                    <?php 
                    if(session('usuario_id') == $mascotaD['mascota_id']):?>
                    <a href="<?= base_url()?>/perfil" class="btn btn-outline-success">Aceptar</a>
                    <?php elseif(session('usuario_id') == null) : ?>
                    <a href="<?= base_url()?>/login" class="nav-item nav-link">Login</a>
                    <?php elseif(session('usuario_id') != $mascotaD['mascota_id']):?>
                      <button type="button" class="btn btn-outline-success">Adoptar</button>
                   
                    <?php endif;?>  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>



  <?php
        break;
      } else {
        
      }

    endforeach;
    break;
  } ?>
<?php endforeach; ?>
<br>
<br>