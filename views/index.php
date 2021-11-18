<?php require_once "./views/layouts/header.php"; ?>

<div class="container my-5">

<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Fecha de emision</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Total</th>
      <th scope="col">Codigo de cliente</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach($this->model->get() as $factura):?>
        
    <tr>
      <td scope="row"><?php echo $factura['num_factura'] ?></td>
      <td scope="row"><?php echo $factura['fecha_emision'] ?></td>
      <td scope="row"><?php echo $factura['cantidad'] ?></td>
      <td scope="row"><?php echo $factura['total'] ?></td>
      <td scope="row"><a href="<?php echo url()."?c=factura&m=user&id=".$factura['cod_cliente'] ?>">
        <?php foreach($factura['clientes'] as $cliente){
            echo $cliente['nombre'];
        }  

        ?>
      </a></td>

      <td>
          <a href="" class="btn btn-info btn-sm">Editar</a>
          <a href="" class="btn btn-danger btn-sm">Eliminar</a>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
</div>

<?php require_once "./views/layouts/footer.php"; ?>