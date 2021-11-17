<?php require_once "./views/layouts/header.php"; ?>

<div class="container my-5">
    <?php foreach($user as $user): ?>
    <div class="card">
        <div class="card-header">
            Usuario
        </div>
        <div class="card-body">
            <p>Nombre: <?php echo $user['nombre'] ?></p>
            <a href="<?php echo url()."?c=factura&m=eliminar_user&id=".$user['cod_cliente'] ?>">Eliminar</a>
            <a href="<?php echo url()."?c=factura&m=edit&id=".$user['cod_cliente'] ?>" class="btn btn-info">Editar usuario</a>
        </div>
    </div>
    <?php endforeach ?>
</div>

<?php require_once "./views/layouts/footer.php"; ?>