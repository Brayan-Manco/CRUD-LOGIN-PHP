<?php 
$usuario = controladorRegistro::ctrselecionarRegistro();
//echo '<pre>'; print_r($usuario); echo '</pre>'
?>

<link rel="stylesheet" href="style/style.css">
<br>
<br>

<div class="fondo_registro">
<div class="container text-center">
            <form class="p-5 bg-11ght" method="post">
            <h1>Actualizar</h1>
                <div class="form-group">
                    <i class="fas fa-user"></i>
                    <label  class="letra2" for="nombre"><strong>Nombre</strong></label>
                    <div class="input-group">
                            <input type="text" class="form-control" id="nombre" name="actualizarNombre">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <i class="fas fa-user"></i>
                    <label  class="letra2" for="nombre"><strong>Telefono</strong></label>
                    <div class="input-group">-
                            <input type="text" class="form-control" id="telefono" name="actualizarTelefono">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <i class="fa-solid fa-envelope"></i>
                    <label  class="letra2" for="email"><strong>Correo Electrónico</strong></label>
                    <div class="input-group">
                            <input type="email" class="form-control" id="email" name="actualizarEmail">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <i class="fa-solid fa-key"></i>
                    <label  class="letra2" for="pwd"><strong>Contraseña</strong></label>
                    <div class="input-group">
                            <input type="text" class="form-control" id="pwd" name="actualizarPassword">
                    </div>
                </div>
                </br>
                <?php 
                    
                    $registro = controladorRegistro::ctrActualizarRegistro();
                    if($registro=="ok"){
                        echo '<script>

                        if (window.history.replaceState) {

                            window.history.replaceState(null, null, window.location.href);

                        }
                        </script>';

                        echo '<div class="alert alert-success">El usuario ha sido actualizado correctamente</div>';
                    }
                ?>
                </br>
                <button type="submit" class="btn btn-primary boton barra letra2">Enviar</button>
            </form>
</div>
</div>
