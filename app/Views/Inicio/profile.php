<br><br>
  <div class="main-body">
    <div class="main-body">
      <link rel="stylesheet" href="assets/css/profile.css">
      <div class="row gutters-sm">
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center">
                <img src="assets/img/member1.jpg" alt="Admin" class="rounded-circle" width="150">
                <div class="mt-3">
                  <h4> <?= session('nombre') . " " . session('apellido'); ?></h4>
                  <p class="text-secondary mb-1">Rescatista</p>
                  <p class="text-muted font-size-sm">Bay Area, La Ching, CA</p>
                  <button class="btn btn-primary" onClick="Mostrar();">Posts</button>
                  <button class="btn btn-outline-primary">Mensajes</button>
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
                  <?= session('correo'); ?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Telefono</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <?= session('telefono'); ?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Celular</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <?= session('celular'); ?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Direccion</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <?php foreach ($direccion as $direcciones)
                    if ($direcciones['usuario_id'] == session('usuario_id')) {
                      echo $direcciones['calle'] . " " . $direcciones['colonia'] . " "
                        . $direcciones['codigo_postal'];
                    }
                  ?>
                </div>
              </div>
            </div>
          </div>
          <div class="card mt-3">
            <ul class="list-group list-group-flush">
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="2" y1="12" x2="22" y2="12"></line>
                    <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                  </svg>Peticiones</h6>
                <span class="text-secondary"><b>24</b> Mensajes</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline">
                    <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                  </svg>Propuestas</h6>
                <span class="text-secondary"><B>6</b> Mascotas en Proceso</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info">
                    <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                  </svg>Fecha de Ingreso</h6>
                <span class="text-secondary"> <?= session('fecha_ingreso'); ?></span>
              </li>
              <!---<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                      <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                      <span class="text-secondary">bootdey</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                      <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                      <span class="text-secondary">bootdey</span>
                    </li>><--->
            </ul>
          </div>

        </div>

        <?php foreach ($mascotas as $mascota) :
          if (session('usuario_id') == $mascota['usuario_id']) : ?>
            <!-- INFO --->
              <div>
              <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title"><?= $mascota['nombre_mascota'] ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?= $mascota['mascota_nacimiento'] ?></h6>
                  <p class="card-text"><?= $mascota['mascota_descripcion'] ?></p>
                  <input id="botonAdoptar" onClick="location.href='<?= base_url() ?>/Mascotas/perfilMascota/<?= $mascota['mascota_id'] ?>'" type="submit" value="Ver Mas" class="btn btn-success">
                </div>
              </div>
              </div>
          <?php endif;
        endforeach; ?>
            
      </div>
    </div>
  </div>
  <br>
<script>
  function Mostrar() {
    var intro = document.getElementById('formulario');
    intro.style.display = 'flex';
  }

  function Ocultar() {
    var intro = document.getElementById('formulario');
    intro.style.display = 'none';
  }
</script>