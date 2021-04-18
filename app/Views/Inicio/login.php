<sect>
<div class="cont">
    <div class="form sign-in">
    <form action="<?= base_url()?>/iniciar_sesion" method="post">
      <h2>Iniciar Sesion</h2>
        <label>
          <span>Correo Electronico</span>
          <input type="text" name="usuario">
        </label>
        <label>
          <span>Password</span>
          <input type="password" name="contrasena">
        </label>
        <button type="submit" value="Iniciar" class="submit">Iniciar</button>
        <p class="forgot-pass">Olvidaste tu Contrasenia?</p>
    </form>
      <div class="social-media">
        <ul>
          <li><img src="assets/img/facebook.png"></li>
          <li><img src="assets/img/twitter.png"></li>
          <li><img src="assets/img/linkedin.png"></li>
          <li><img src="assets/img/instagram.png"></li>
        </ul>
      </div>
    </div>

    <div class="sub-cont">
      <div class="img" >
        <div class="img-text m-up">
          <h2>Eres Nuevo?</h2>
          <p>Registrate en nuestra comunidad y da en adopcion a nuestras mascotas rescatas!</p>
        </div>
        <div class="img-text m-in">
          <h2>La Mascota que estas solicitado es la siguiente:</h2>
          <p>NOMBRE: PANCHO</p>
          <p>EDAD: 70</p>
          <p>RAZA: PIRATA</p>
          <p>PROCEDENCIA: MX</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Registrate</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>
      <div class="form sign-up">
        <h2>Registrate</h2>
        <form>
        <div class="form-group">
        <div class="form-row">
    <div class="form-group col-md-6">
      <input type="text" class="form-control" id="inputName4" placeholder="Nombre">
    </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control" id="inputLastname4" placeholder="Apellido">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <input type="text" class="form-control" id="inputAdress4" placeholder="Calle">
    </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control" id="inputAdress24" placeholder="Colonia">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <input type="text" class="form-control" id="inputPhone4" placeholder="Telefono">
    </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control" id="inputCellphone4" placeholder="Celular">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <input type="text" class="form-control" id="inputCity" placeholder="Ciudad">
    </div>
    <div class="form-group col-md-4">
      <select id="inputState" class="form-control"placeholder="CP">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <input type="text" class="form-control" id="inputZip" placeholder="CP">
    </div>
  </div>
  <input type="text" class="form-control" id="inputUsername" placeholder="Username">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
    <div class="form-group col-md-6">
      <input type="password" class="form-control" id="inputConfirmpassword4" placeholder="Confirmar Password">
    </div>
  </div>
  <div class="form-group">
                    <label for="inputImagen"> 
                    <input type="file" class="form-control-file" id="imagen"></label>
  </div>
  <center><button type="submit" class="btn btn-primary">Registrarse</button></center>
  </div>
  </div>
  </div>
</sect>
<script type="text/javascript" src="assets/login.js"></script>
<link rel="stylesheet" type="text/css" href="assets/css/login.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
