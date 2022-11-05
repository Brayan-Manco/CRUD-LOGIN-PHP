<?php 
$usuario = controladorRegistro::ctrselecionarRegistro();
//echo '<pre>'; print_r($usuario); echo '</pre>'
?>

<br>
<br>
<br>
<div class="container-fluid">
  <div class="container py-5">
    <table class="table table-striped table-dark">
      <thead>
        <tr>
          <th>#</th>
          <th>Nombre</th>
          <th>telefono</th>
          <th>Email</th>
          <th>contraeña</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>

      <?php foreach ($usuario as $key=>$value): ?>
        <tr>
          <td><?php echo ($key+1);?></td>
          <td><?php echo $value["nombre"];?></td>
          <td><?php echo $value["telefono"];?></td>
          <td><?php echo $value["correo"];?></td>
          <td><?php echo $value["password"];?></td>
          <td>
            <form action="" method="post">
              <div class="btn-agroup">
                <a href="index.php?paginas=editar&id=<?php echo $value["id"]; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                <a class="btn btn-warning"><i class="fas fa-trash-alt"></i></a>
              </div>
          </td>
        <tr>
          <?php endforeach ?> 
      </tbody>
      </thead>
    </table>
  </div>
</div>




