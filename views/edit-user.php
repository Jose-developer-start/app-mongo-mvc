<?php require_once "./views/layouts/header.php"; ?>
<div class="row">
    <div class="col-md-6 m-auto py-5">
    <div class="card">
        <card class="card-header">
            <h4>Editar usuario</h4>
        </card>
        <div class="card-body">
            <form action="<?php echo url()."?c=factura&m=updateUser" ?>" method="POST">
            <?php foreach($user as $user): ?>
                <input type="hidden" name="cod_cliente" value="<?php echo $user['cod_cliente'] ?>">

            <div class="form-group">
            <input class="form-control" type="text" name="nombre" placeholder="Nombre" value="<?php echo $user['nombre'] ?>">
            </div>
            <div class="form-group">
            <input class="form-control" type="text" name="apellido" placeholder="Apellido" value="<?php echo $user['apellido'] ?>">
            </div>
            <div class="form-group">
            <input class="form-control" type="text" name="municipio" placeholder="Municipio" value="<?php echo $user['municipio'] ?>">
            </div>
            <div class="form-group">
            <input class="form-control" type="text" name="telefono" placeholder="Telefono" value="<?php echo $user['telefono'] ?>">
            </div>

            <button type="submit" class="btn btn-outline-success"><i class="far fa-edit"></i></button>
            <?php  endforeach ?>
            </form>
        </div>
    </div>
    </div>
</div>
<?php require_once "./views/layouts/footer.php"; ?>