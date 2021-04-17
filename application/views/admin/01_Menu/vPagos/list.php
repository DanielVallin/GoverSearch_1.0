        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Pagos
                <small>Listado</small>
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="box box-solid">
                    <div class="box-body">
                        <!-- AQUI INICIA EL BODY -->
                        <div class="row">
                            <div class="col-md-12">
                                <a href="<?php echo base_url();?>00_Menu/cPagos/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Pago</a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Usuario_pk</th>
                                        <th>Descripcion</th>
                                        <th>Fecha_Pago</th>
                                        <th>Importe</th>
                                        <th>opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(!empty($pagos)):?>
                                    <?php foreach($pagos as $pago):?>
                                        <tr>
                                            <td><?php echo $pago->Usuario_pk;?></td>
                                            <td><?php echo $pago->Descripcion;?></td>
                                            <td><?php echo $pago->Fecha_Pago;?></td>
                                            <td><?php echo $pago->Importe;?></td>
                                            
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info btn-view" data-toggle="modal" data-target="#modal-default" value="<?php echo $pago->pk_Pago;?>"><span class="fa fa-search"></span>
                                                    </button>
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
