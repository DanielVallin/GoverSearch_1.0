        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Permisos
                <small>Lsita</small>
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="box box-solid">
                    <div class="box-body">
                        <!-- AQUI INICIA EL BODY -->
                        <a href="<?php echo base_url();?>administrador/Permisos/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Permisos</a>
                        <hr>
                        <div class="row">
                                <div class="col-md-12">
                                    <table id="example1" class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Menu</th>
                                            <th>Rol</th>
                                            <th>Read</th>
                                            <th>Insert</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                            <th>Consultas</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(!empty($permisos)):?>
                                                <?php foreach($permisos as $permiso):?>
                                                    <tr>
                                                        <td><?php echo $permiso->Menu;?></td>
                                                        <td><?php echo $permiso->Rol;?></td>
                                                        
                                                        <td>
                                                            <?php if($permiso->read == 0): ?>
                                                                <span class="fa fa-times"></span>
                                                            <?php else:?>
                                                                <span class="fa fa-check"></span>
                                                            <?php endif;?>
                                                        </td>
                                                        <td>
                                                            <?php if($permiso->insert == 0): ?>
                                                                <span class="fa fa-times"></span>
                                                            <?php else:?>
                                                                <span class="fa fa-check"></span>
                                                            <?php endif;?>
                                                        </td>
                                                        <td>
                                                            <?php if($permiso->update == 0): ?>
                                                                <span class="fa fa-times"></span>
                                                            <?php else:?>
                                                                <span class="fa fa-check"></span>
                                                            <?php endif;?>
                                                        </td>
                                                        <td>
                                                            <?php if($permiso->delete == 0): ?>
                                                                <span class="fa fa-times"></span>
                                                            <?php else:?>
                                                                <span class="fa fa-check"></span>
                                                            <?php endif;?>
                                                        </td>
                                                        <td>
                                                            <div class="btn-group"> 
                                                                <a href="<?php echo base_url()?>administrador/Permisos/edit/<?php echo $permiso->pk_Permiso ?>" class="btn btn-warning btn-flat"><span class="fa fa-edit "></span></a>
                                                                <a href="<?php echo base_url(); ?>administrador/Permisos/delete/<?php echo $permiso->pk_Permiso ?>" class="btn btn-danger btn-flat"><span class="fa fa-file-pdf-o "></span></a>                                                           
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
