        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Pagos
                <small>Listado</small>
                <a href="<?php echo base_url();?>00_Menu/cPagos/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Pago</a>                            

                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="box box-solid">
                    <div class="box-body">
                        <!-- AQUI INICIA EL BODY -->
                        <div class="row">
                            
                            <form action="<?php echo current_url();?>" method="POST" class="form-horizontal">
                                <div class="form-group">
                                    <label for="" class="col-md-1 control-label">Desde:</label>
                                    <div class="col-md-3">
                                        <input type="date" class="form-control" name="fechainicio" value="<?php echo !empty($fechainicio) ? $fechainicio:'';?>">
                                    </div>
                                    <label for="" class="col-md-1 control-label">Hasta:</label>
                                    <div class="col-md-3">
                                        <input type="date" class="form-control" name="fechafin" value="<?php  echo !empty($fechafin) ? $fechafin:'';?>">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="submit" name="buscar" value="Buscar" class="btn btn-primary">
                                        <a href="<?php echo base_url(); ?>reportes/ventas" class="btn btn-danger">Restablecer</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <table id="example" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Usuario</th>
                                        <th>Descripción</th>
                                        <th>Fecha de Pago</th>
                                        <th>Importe</th>
                                        <th>Folio</th>
                                        <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(!empty($pagos)):?>
                                    <?php foreach($pagos as $pago):?>
                                        <tr>
                                            <td><?php echo $pago->Nombre; echo " "; echo $pago->Apellidos; ?></td>
                                            <td><?php echo $pago->Descripcion;?></td>
                                            <td><?php echo $pago->Fecha_Pago;?></td>
                                            <td><?php echo $pago->Importe;?></td>
                                            <td><?php echo $pago->Folio_Pago;?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="<?php echo base_url()?>00_Menu/cPagos/edit/<?php echo $pago->pk_Pago;?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                                    <a href="<?php echo base_url();?>00_Menu/cPagos/delete/<?php echo $pago->pk_Pago;?>" class="btn btn-danger btn-remove"><span class="fa fa-remove"></span></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                    <?php endif;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- AQUI INICIA EL BODY -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
