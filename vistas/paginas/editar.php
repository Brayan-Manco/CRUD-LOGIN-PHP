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
            <form action="" method="post, get">
                <div class="input-box">
                    <input type="text" class="input-control" id="nombre" name="ENombre" placeholder="Nombre">
                </div>
                <div class="input-box">
                    <input type="text" class="input-control" id="telefono" name="ETelefono" placeholder="Telefono">
                </div>
                <div class="input-box">
                    <input type="email" class="input-control" id="email" name="ECorreo" placeholder="Email">
                </div>
                <div class="input-box">
                    <input type="text" class="input-control" id="pwd" name="EPassword" placeholder="Contraseña">
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
                            window.location="index.php?paginas=inicio";
                            </script>';
                    }
                ?>
            </form>
        </div>
    </div>
</section> 
