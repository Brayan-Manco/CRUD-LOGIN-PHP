<?php 
$usuario = controladorRegistro::ctrselecionarRegistro();
//echo '<pre>'; print_r($usuario); echo '</pre>'
?>

<div class="row">
<form action="" method="post">
	<?php
	if(count($usuario))
  {
		foreach ($usuario as $key=>$value)
    {
			?>
        <div class="col-md-3">
            <div class="card-body border border-secondary rounded">
              <h4 class="card-title">  <?php echo  $value["nombre"]; ?></h4>
              <div class="card-text">Telefono : <?php echo  $value["telefono"]; ?></div>
              <div class="card-text">Corre : <?php echo  $value["correo"]; ?></div>
              <div class="card-text">Contraseña : <?php echo  $value["password"]; ?></div>
              <hr class="mt-1"/>
              <a class="btn btn-primary" href="index.php?paginas=editar&id=<?php echo $value["id"];?>">Editar</a>
              <button class="btn btn-danger">Eliminar</button>
              <?php
                  //$respuesta = new controladorRegistro();
                  //$respuesta-> ctrBorrarRegistro();
              ?>
            </div>
          </div>
          <br>
			<?php
		}
	}else{
		?>
		<div class="alert alert-info">
			Actualmente no existen registros.
		</div>
		<?php
	}
	?>
  </form>
</div>
