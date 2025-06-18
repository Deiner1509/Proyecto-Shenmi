<?php echo $this->extend('plantilla/layout'); ?>
<?php echo $this->section('contenido'); ?>
<h2>Iniciar Sesion</h2>
<?php if (session('mensaje')):?>
    <div class="alert alert-danger"><?= session('mensaje'); ?></div>
<?php endif; ?>    
<form method="<?= base_url('/login/acceder/'); ?>">
<label >Nombre De Ususario</label>
<input type="text" name="nombre_usu" required>
<br>
<label >Contraseña</label>
<input type="password" name="password" required>
<br>
<button type="submit">Ingresar</button>
</form>
<?php echo $this->endSection(); ?>