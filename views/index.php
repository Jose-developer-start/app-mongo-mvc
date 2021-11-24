<?php require_once "./views/layouts/header.php"; ?>

<div class="container my-5">

<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Fecha de emision</th>
      <th scope="col">Cliente</th>
      <th scope="col">Productos</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Total</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach($this->model->get() as $factura):?>
        
    <tr>
      <td scope="row"><?php echo $factura->num_factura ?></td>
      <td scope="row"><?php echo $factura->fecha_emision ?></td>
      <td scope="row"><a href="<?php echo url()."?c=factura&m=user&id=".$factura->cod_cliente ?>">
        <?php
            echo $factura->clientes['nombre']. " ".$factura->clientes['apellido'] ;
            ?>
      </a></td>
      <td scope="row"><a href="<?php echo url()."?c=factura&m=user&id=".$factura->productos->cod_producto ?>">
        <?php
            echo $factura->productos['nombre_pro'];
        ?>
      </a></td>
      
      <td scope="row"><?php echo $factura->cantidad ?></td>
      <td scope="row"><?php echo $factura->total ?></td>


      <td>
          <a href="" class="btn btn-info btn-sm">Editar</a>
          <a href="<?php echo url()."?c=factura&m=delete&num_factura=".$factura->num_factura."&cod_cliente=".$factura->cod_cliente; ?>" class="btn btn-danger btn-sm">Eliminar</a>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
</div>

<?php require_once "./views/layouts/footer.php"; ?>