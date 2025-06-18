<?php echo $this->extend('plantilla/layout'); ?>
<?php echo $this->section('contenido'); ?>
<br>
<h2>empleados</h2>
<br>
<a href="<?php echo base_url('empleados/nuevo'); ?>"  class="btn btn-success">nuevo empleado</a>
<br>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">cedula</th>
      <th scope="col">apellido</th>
      <th scope="col">email</th>
      <th scope="col">direccion</th>
      <th scope="col">telefono</th>
      <th scope="col">acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($empleados as $emp): ?>

    <tr>
      <th scope="row"><?php echo $emp ['nombre_emp']; ?></th>
      <td><?php echo $emp ['ced_empleado']; ?></td>
      <td><?php echo $emp ['apellido_emp']; ?></td>
      <td><?php echo $emp ['email_emp']; ?></td>
      <td><?php echo $emp ['direccion_emp']; ?></td>
      <td><?php echo $emp ['telefono_emp']; ?></td>
      <td>
      <a href="<?php echo base_url('/empleados/editar/'.$emp['ced_empleado']);?>" 
      class="btn btn-warning">editar empleado</a>
      <a href="<?php echo base_url('/empleados/eliminar/'.$emp['ced_empleado']);?>" 
        class="btn btn-warning">eliminar empleado</a>
    </tr>
    <?php endforeach; ?>
    
      </td>
    </tr>
  </tbody>
</table>
<a href="<?= base_url('/empleados/exportar'); ?>"  class="btn btn-primary">Exportara Excel</a>
<a href="<?= base_url('/logout'); ?>"  class="btn btn-danger float-end">cerrar sesion</a>
<?php echo $this->endSection(); ?>






