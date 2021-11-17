<?php require_once "./views/layouts/header.php"; ?>

<div class="container my-5">
    <?php foreach($user as $user): ?>
    <div class="card">
        <div class="card-header">
            Usuario
        </div>
        <div class="card-body">
            <p>Nombre: <?php echo $user['nombre'] ?></p>
            <a class="btn btn-danger" href="<?php echo url()."?c=factura&m=eliminar_user&id=".$user['cod_cliente'] ?>"><i class="fas fa-trash-alt"></i></a>
            <a href="<?php echo url()."?c=factura&m=edit&id=".$user['cod_cliente'] ?>" class="btn btn-outline-info"><i class="fas fa-user-edit"></i></a>
        </div>
    </div>
    <?php endforeach ?>
</div>

<?php require_once "./views/layouts/footer.php"; ?>