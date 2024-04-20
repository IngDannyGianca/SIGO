<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-0">
                <div class="col-md-12">
                    <div class="m-0 text-dark text-center text-lg">
                        <i class="fas fa-box"></i>&nbsp;&nbsp;Registro Maestro de activos
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div style="max-width: 1140px;margin: 0 auto;">
                <form id="FRM_INSERT_PRODUCTO" method="post" action="<?php echo $functions->direct_sistema(); ?>/modules/productos/insert-update-producto.php" enctype="multipart/form-data">
                    <input type="hidden" name="producto_id" id="">
                    <div class="card card-primary">
                        <div class="card-header">
                            <div class="card-title">Datos del activo</div>
                            <div class="float-right" style="height: 2rem; width: 150px">
                                <input type="text" class="form-control" placeholder="ID de activo" name="producto_codigo" readonly>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Código</label>
                                        <input type="text" class="form-control" placeholder="Ingrese código" name="producto_code" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input type="text" class="form-control" placeholder="Ingrese nombre de activo" name="producto_nombre" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Serie</label>
                                        <input type="text" class="form-control" placeholder="Ingrese serie de activo" name="producto_marca" required>
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Chasis</label>
                                        <input type="text" class="form-control" placeholder="Ingrese chasis de activo" name="producto_marca" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Marca</label>
                                        <input type="text" class="form-control" placeholder="Ingrese marca de activo" name="producto_marca" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Modelo</label>
                                        <input type="text" class="form-control" placeholder="Ingrese modelo" name="producto_marca" required>
                                    </div>
                                </div>





                            </div>
                            <div class="row">
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Estado del activo</label>
                                        <select class="form-control select2" name="producto_unitvalue">
                                            
                                            <option value="ex">Excelente</option>
                                            <option value="bu">Bueno</option>
                                            <option value="re">Regular</option>
                                            <option value="da">Dañado</option>
                                            <option value="de">Desecho</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Valor</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i><p style="font-size: smaller;">Q</p></i>
                                                </span>
                                            </div>
                                            <input type="number" min="0" step="any" class="form-control"name="producto_precio" value="" required>
                                        </div>
                                    </div>
                                </div>
                                <!--
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Stock</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fas fa-box"></i>
                                                </span>
                                            </div>
                                            <input type="number" min="0" class="form-control" name="producto_cantidad" placeholder="Cantidad del producto" value="1" required>
                                        </div>
                                    </div>
                                </div>
                                -->
                                <div class="col-md-10">
                                    <div class="form-group text-right">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="prod_estado" name="producto_estado">
                                            <label for="prod_estado" class="custom-control-label">Desactivado</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button id="btn-new" class="btn btn-primary">
                                <i class="fa fa-broom fa-1x"></i>&nbsp;&nbsp;Limpiar campos
                            </button>
                            <button id="btn-product-list" class="btn btn-secondary">
                                <i class="fa fa-box fa-1x"></i>&nbsp;&nbsp;Listado de Activos
                            </button>
                            <div class="float-right">
                                <button type="submit" id="btn-save-product" class="btn btn-success btn-md"><i class="fa fa-save fa-1x"></i>&nbsp;&nbsp;<font>Guardar activo</font></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>