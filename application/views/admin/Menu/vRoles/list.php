        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Roles
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
                                    <a href="<?php echo base_url();?>Menu/cRoles/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Rol</a>
                                </div>
                            </div>
                        <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <table id="example1" class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Rol</th>
                                            <th>Estatus</th>
                                            <th>Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(!empty($roles)):?>
                                                <?php foreach($roles as $rol):?>
                                                    <tr>
                                                        <td><?php echo $rol->pk_Rol;?></td>
                                                        <td><?php echo $rol->Nombre_Rol;?></td>
                                                        <td>
                                                        <?php if($rol->Estado == 0): ?>
                                                            <span class="fa fa-times"> Inactivo</span>
                                                        <?php else:?>
                                                            <span class="fa fa-check"> Activo</span>
                                                        <?php endif;?>
                                                    </td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <a href="<?php echo base_url()?>Menu/cRoles/edit/<?php echo $rol->pk_Rol;?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                                                <a href="<?php echo base_url();?>Menu/cRoles/delete/<?php echo $rol->pk_Rol;?>" class="btn btn-danger btn-flat"><span class="fa fa-remove"></span></a>
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

