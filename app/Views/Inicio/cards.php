<section class="container">

    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
    <div class="page-header">
        <center>
            <h1>Mascotas En Adopcion<br>
                <small>ReciÃ©n llegados </small>
            </h1>
        </center>
    </div>
    <div class="row active-with-click">
        <?php foreach ($mascotas as $mascota) : ?>


            <div class="col-md-4 col-sm-6 col-xs-12">
                <p id="idPet">
                    <?= $mascota['mascota_id'] ?>
                </p>

                <article class="material-card Red">
                    <h2>
                        <span><?= $mascota['nombre_mascota'] ?></span>
                        <strong>
                            <i class="fa fa-fw fa-star"></i>
                            <?= $mascota['mascota_estado'] ?>
                        </strong>
                    </h2>
                    <div class="mc-content">
                        <div class="img-container">
                            <img class="img-responsive" src="assets/img/01.jpg">
                        </div>
                        <div class="mc-description">
                            <?= $mascota['mascota_descripcion'] ?>
                        </div>
                    </div>
                    <a class="mc-btn-action">
                        <i class="fa fa-bars"></i>
                    </a>
                    <div class="mc-footer">
                        <h4>
                            Social
                        </h4>
                        <h6>
                            <table>
                                <tr>
                                    <td a class="prueba">Sexo</td>
                                    <td a class="prueba">Edad</td>
                                    <td a class="prueba">Peso</td>
                                    <td a class="prueba">Clase</td>
                                </tr>
                            </table>
                        </h6>
                        <a class="fa fa-fw ">F</a>
                        <a class="fa fa-fw ">18</a>
                        <a class="fa fa-fw ">120</a>
                        <a class="fa fa-fw ">A</a>

                        <input id="botonAdoptar" onClick="location.href='<?= base_url() ?>/Mascotas/perfilMascota/<?= $mascota['mascota_id'] ?>'" type="submit" value="Adoptar" class="btn btn-success">

                        </input>


                    </div>
                </article>
            </div>

        <?php endforeach; ?>

    </div>
    </div>
</section>