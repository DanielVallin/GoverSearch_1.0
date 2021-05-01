        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Catalogo de Terminos Clave
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
                                <a href="<?php echo base_url();?>Menu/cClaves/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Termino Clave</a>
                                </div>
                            </div>
                                <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <table id="example1" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Termino Clave</th>
                                                <th>¿Quién lo Registro?</th>
                                                <th>Fecha de Alta</th>
                                                <th>Estado</th>
                                                <th>Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(!empty($cClaves)):?>
                                                <?php foreach($cClaves as $cClave):?>
                                                    <tr>
                                                        <td><?php echo $cClave->Termino_Clave;?></td>
                                                        <td><?php echo $cClave->Nombre; echo " "; echo $cClave->Apellidos;?></td>
                                                        <td><?php echo $cClave->Fecha_Alta;?></td>
                                                            <?php $dataClave = $cClave->Termino_Clave."*".$cClave->Nombre."*".$cClave->Fecha_Alta; ?>
                                                        <td>
                                                            <?php if($cClave->Estado == 0): ?>
                                                                <span class="fa fa-times"> Inactivo</span>
                                                            <?php else:?>
                                                                <span class="fa fa-check"> Activo</span>
                                                            <?php endif;?>
                                                        </td>
                                                        <td>
                                                            <div class="btn-group">
                                                            <button type="button" class="btn btn-info btn-view-claves" data-toggle="modal" data-target="#modal-default" value="<?php echo $dataClave;?>">
                                                                <span class="fa fa-search"></span>
                                                            </button>
                                                                <a href="<?php echo base_url()?>Menu/cClaves/edit/<?php echo $cClave->pk_Ter_Clave;?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                                                <a href="<?php echo base_url();?>Menu/cClaves/delete/<?php echo $cClave->pk_Ter_Clave;?>" class="btn btn-danger btn-remove"><span class="fa fa-remove"></span></a>
                                                                <a href="<?php echo base_url();?>Menu/cClaves/PDFD/<?php echo $cClave->pk_Ter_Clave;?>" class="btn btn-danger btn-remove"><span class="fa fa-file-pdf-o"></span></a>
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
