
<div class="fondo_ingreso">
<div class="d-flex justify-content-center text-center ">
<form lass="p-3 bg-black" method="post">
    <div class="form-group">
        <i class="fa-solid fa-envelope"></i>
        <label class="letra2" for="email"><strong>Correo eletrónico</strong></label>
        <input type="email" class="form-control" id="email" name="ingreseCorreo">
    </div>

    <div class="form-group">
        <i class="fa-solid fa-key"></i>
        <label class="letra2" for="pws"><strong>Contraseña</strong></label>
        <input type="password" class="form-control" id="pws" name="ingresepassword">
    </div>
    <div class="form-group">
        <label class="form-grupo check-label">
            <br>
        <input class="form-chack-input letra2" type="checkbox"><strong>   Recordar contraseña</strong></label>
    </div>

    <?php
        $ingreso = new controladorRegistro();
        $ingreso-> ctrIngreso();
    ?>
</br>
    <button  class="btn btn-primary boton barra letra2">Aceptar</button>
</br>
<a href="index.php?paginas=registro" class="stretched-link letra2 boton" style="position: relative;"><strong>Registrarme</strong></a>
</form> 
</div>
</div>


