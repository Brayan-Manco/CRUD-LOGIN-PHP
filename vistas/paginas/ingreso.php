
<section class="form-main"> 
    <div class="form-content">
        <div class="circle-1"></div>
        <div class="circle-2"></div>
        <div class="circle-3"></div>
        <div class="box">
            <h3>Bienvenido</h3>
            <form action="" method="post">
                <div class="input-box">
                    <input type="email" class="input-control" id="email" name="ingreseCorreo" placeholder="Email">
                </div>
                <div class="input-box">
                    <input type="password" class="input-control" id="password" name="ingresepassword" placeholder="Contraseña">
                </div>
                <button type="submit" class="btn">Ingresar</button>
                <?php
                    $ingreso = new controladorRegistro();
                    $ingreso-> ctrIngreso();
                ?>
            </form>
            <p>No tienes cuenta? <a href="index.php?paginas=registro" class="gradient-text">Crear cuenta</a></p>
        </div>
    </div>
</section> 
