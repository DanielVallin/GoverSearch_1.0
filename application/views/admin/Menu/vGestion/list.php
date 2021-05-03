        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Gestion de Leyes  
                <small>List</small>
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
                                <small class="text-muted"></small>
                            </div>
                        </div>
                        <a href="<?php echo base_url();?>Menu/cGestion/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Gestion</a>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Consecutivo</th>
                                        <th>No. Articulo</th>
                                        <th>Tipo Articulo</th>
                                        <th>Descripcion del Articulo</th>
                                        <th>Ultima Reforma</th>
                                        <th>Estatus</th>
                                        <th>Estado</th>
                                        <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <?php if(!empty($cGestion)):?>
                                            <?php foreach($cGestion as $cGest):?>
                                                <tr>
                                                    <td><?php echo $cGest->pk_Gestionid;?></td>
                                                    <td><?php echo $cGest->Num_Articulo;?></td>
                                                    <td><?php echo $cGest->Tipo;?></td>
                                                    <td><?php echo $cGest->Descripcion;?></td>
                                                    <td><?php echo $cGest->UltReforma;?></td>
                                                    <td><?php echo $cGest->Estatus;?></td>
                                                    <td>
                                                            <?php if($cGest->Estado == 0): ?>
                                                                <span class="fa fa-times"> Inactivo</span>
                                                            <?php else:?>
                                                                <span class="fa fa-check"> Activo</span>
                                                            <?php endif;?>
                                                        </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="<?php echo base_url();?>Menu/cGestion/edit/<?php echo $cGest->pk_Gestionid;?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                                            <a href="<?php echo base_url();?>Menu/cGestion/delete/<?php echo $cGest->pk_Gestionid;?>" class="btn btn-danger btn-remove"><span class="fa fa-remove"></span></a>                                                        </div>
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
