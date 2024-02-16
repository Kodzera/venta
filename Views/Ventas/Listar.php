<?php encabezado()?>
<!-- Begin Page Content -->
<div class="page-content bg-light">
    <div class="page-header bg-light">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Nuevo Registro</h2>
        </div>
    </div>
    <section>
        <div class="container-fluid">
        <form action="" method="post" id="frmCompras" class="row" autocomplete="off">
    <div class="col-lg-3">
        <div class="form-group">
            <label for="buscar_nombre">Nombre del producto</label>
            <input id="buscar_nombre" onkeyup="BuscarProductoPorNombre(event);" class="form-control" type="text" name="nombre" placeholder="Nombre del producto">
            <input type="hidden" id="id" name="id">
            <span class="text-danger d-none" id="error">No hay producto</span>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label for="nombreP">Producto</label>
            <input id="nombreP" class="form-control" type="text" name="nombreP" readonly>
        </div>
    </div>
    <div class="col-lg-2">
        <div class="form-group">
            <label for="cantidad">Cantidad</label>
            <input id="cantidad" class="form-control" type="text" name="cantidad" onkeyup="IngresarCantidad(event);">
        </div>
    </div>
    <div class="col-lg-2">
    <div class="form-group">
        <label for="nombreP">Código del producto</label>
        <input id="codigoP" class="form-control" type="text" name="codigoP" readonly>
    </div>
</div>

</form>


            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-light mt-4" id="tablaCompras">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Id</th>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                    <th>Precio</th>
                                    <th>Total</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody id="ListaCompras">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mt-1">
                    <div class="form-group">
                        <strong class="text-primary">Datos del Cliente</strong>
                        <input type="hidden" id="id_cliente" name="id_cliente">
                        <input type="text" id="ruc_cliente" onkeyup="BuscarCliente(event);" name="ruc_cliente" class="form-control" placeholder="Ruc/Dni del cliente">
                        <strong id="nom_cli" class="form-control border-0 text-success"></strong>
                        <strong id="dir_cli" class="form-control border-0 text-success"></strong>
                        <strong id="tel_cli" class="form-control border-0 text-success"></strong>
                    </div>
                </div>
                <div class="col-lg-4 mt-1">
                    <div class="form-group">
                        <strong class="text-primary">Total a pagar</strong>
                        <input type="hidden" id="total" name="total" class="form-control  mb-2">
                        <strong id="tVenta" class="form-control border-0 text-success"></strong>
                        <button class="btn btn-danger" type="button" id="AnularCompra">Anular Venta</button>
                        <button class="btn btn-success" type="button" id="procesarVenta"><i class="fas fa-money-check-alt"></i> Procesar Venta</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php pie()?>