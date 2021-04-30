        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Usuarios
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
                                <a href="<?php echo base_url();?>Menu/cUsuarios/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Usuario</a>                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <table id="example" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Usuario</th>
                                        <th>Correo</th>
                                        <th>Fecha de Alta</th>
                                        <th>Rol</th>
                                        <th>status</th>
                                        <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(!empty($usuarios)):?>
                                    <?php foreach($usuarios as $usuario):?>
                                        <tr>
                                            <td><?php echo $usuario->Nombre; echo " "; echo $usuario->Apellidos;?></td>
                                            <td><?php echo $usuario->Usuario;?></td>
                                            <td><?php echo $usuario->Correo;?></td>
                                            <td><?php echo $usuario->Fecha_Alta;?></td>
                                            <td><?php echo $usuario->rol;?></td>
                                            <td><?php echo $usuario->rol;?></td>
                                            <td>
                                                <div class="btn-group">
                                                   
                                                    <a href="<?php echo base_url()?>Menu/cUsuarios/edit/<?php echo $usuario->pk_Usuario;?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                                    <a href="<?php echo base_url();?>Menu/cUsuarios/delete/<?php echo $usuario->pk_Usuario;?>" class="btn btn-danger btn-remove"><span class="fa fa-remove"></span></a>
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