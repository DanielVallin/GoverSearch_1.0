        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Catalogos Clave
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
                                <a href="<?php echo base_url();?>00_Menu/cCat_Clave/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Clave</a>
                                <a href="<?php echo base_url();?>00_Menu/cReg_Leyes/add" class="btn btn-success btn-flat"><span class="fa fa-file-excel-o"></span> Exportar Excel</a>
                                </div>
                            </div>
                        <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <table id="example1" class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                                <th>Termino_Clave</th>
                                                <th>Usuario_pk</th>
                                                <th>Fecha_Alta</th>
                                                <th>opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(!empty($cClaves)):?>
                                                <?php foreach($cClaves as $cClave):?>
                                                    <tr>
                                                        <td><?php echo $cClave->Termino_Clave;?></td>
                                                        <td><?php echo $cClave->Usuario_pk;?></td>
                                                        <td><?php echo $cClave->Fecha_Alta;?></td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-info btn-view" data-toggle="modal" data-target="#modal-default" value="<?php echo $cClave->pk_Ter_Clave;?>">
                                                                    <span class="fa fa-search"></span>
                                                                </button>
                                                                <a href="<?php echo base_url()?>00_cRoles/Roles/edit/<?php echo $cClave->pk_Ter_Clave;?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                                                <a href="<?php echo base_url();?>00_cRoles/Roles/delete/<?php echo $cClave->pk_Ter_Clave;?>" class="btn btn-danger btn-remove"><span class="fa fa-remove"></span></a>
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
