
<div class="overlay" id="overlay">
    <div class="popup" id="popup" >
        <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
        <h3>LOGIN</h3>
        
        <form class="formulario" method="post" action="htmls/login.php">
            <div class="contenedor-inputs">
                <input type="text" name="name" maxlength="20" placeholder="Usuario">
                <input type="password" name="password" maxlength="20" placeholder="Password">
            </div>
            <input type="submit" value="login" class="btn-submit" name="submit">
        </form>
        <br><br>
        <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
        <p>¿No tienes una cuenta? <a class="link" href="htmls/registrar.html">Registrate </a></p>
    </div>
</div>
</div>
<script src="assets/js/popup.js"></script>
