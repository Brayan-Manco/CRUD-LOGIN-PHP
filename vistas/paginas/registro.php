<section class="form-main"> 
    <div class="form-content">
        <div class="circle-1"></div>
        <div class="circle-2"></div>
        <div class="circle-3"></div>
        <div class="box">
            <h3>Registro</h3>
            <form action="" method="post">
                <div class="input-box">
                    <input type="text" class="input-control" id="nombre" name="registroNombre" placeholder="Nombre">
                </div>
                <div class="input-box">
                    <input type="text" class="input-control" id="telefono" name="registroTelefono" placeholder="Telefono">
                </div>
                <div class="input-box">
                    <input type="email" class="input-control" id="email" name="registroEmail" placeholder="Email">
                </div>
                <div class="input-box">
                    <input type="text" class="input-control" id="pwd" name="registroPassword" placeholder="Contraseña">
                </div>
                <button type="submit" class="btn">Guardar</button>
                <br>
                <?php 
                    
                    $registro = controladorRegistro::ctrtrarRegistro();

                    if($registro=="ok"){
                        echo '<script>

                        if (window.history.replaceState) {

                            window.history.replaceState(null, null, window.location.href);

                        }
                        </script>';

                        echo '<div class="alert alert-success"> El usuario ha sido agregado </div>';
                    }
                ?>
            </form>
        </div>
    </div>
</section> 

