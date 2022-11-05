<?php 
$usuario = controladorRegistro::ctrselecionarRegistro();
//echo '<pre>'; print_r($usuario); echo '</pre>'
?>
<section class="form-main"> 
    <div class="form-content">
        <div class="circle-1"></div>
        <div class="circle-2"></div>
        <div class="circle-3"></div>
        <div class="box">
            <h3>Editar</h3>
            <form action="" method="post">
                <div class="input-box">
                    <input type="text" class="input-control" id="nombre" name="ANombre" placeholder="Nombre">
                </div>
                <div class="input-box">
                    <input type="text" class="input-control" id="telefono" name="ATelefono" placeholder="Telefono">
                </div>
                <div class="input-box">
                    <input type="email" class="input-control" id="email" name="ACorreo" placeholder="Email">
                </div>
                <div class="input-box">
                    <input type="text" class="input-control" id="pwd" name="APassword" placeholder="Contraseña">
                </div>
                <button type="submit" class="btn">Actualizar</button>
                <br>
                <?php 
                    
                    $registro = controladorRegistro::ctrEditarRegistro();

                    if($registro=="ok"){
                        echo '<script>

                        if (window.history.replaceState) {

                            window.history.replaceState(null, null, window.location.href);

                        }
                        </script>';

                        echo '<div class="alert alert-success"> El usuario ha sido actualizado </div>';
                    }
                ?>
            </form>
        </div>
    </div>
</section> 
