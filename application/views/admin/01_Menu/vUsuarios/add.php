
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Usuario
        <small>Nuevo</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <?php if($this->session->flashdata("error")):?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
                             </div>
                        <?php endif;?>
                        <form action="<?php echo base_url();?>03_cCuenta/Usuarios/store" method="POST">
                            
                            <div class="form-group has-feedback">
                                <label for="Nombre">Nombre:</label>
                                <input type="text" class="form-control" placeholder="Usuario" id="Nombre" name="Nombre">
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>

                            <div class="form-group has-feedback">
                                <label for="Nombre">Apellidos:</label>
                                <input type="text" class="form-control" placeholder="Usuario" id="Apellidos" name="Apellidos">
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>

                            <div class="form-group has-feedback">
                                <label for="Nombre">Telefono:</label>
                                <input type="text" class="form-control" placeholder="Usuario" id="Telefono" name="Telefono">
                                <span class="fa fa-phone-square form-control-feedback"></span>
                            </div>

                            <div class="form-group has-feedback">
                                <label for="Nombre">Correo:</label>
                                <input type="text" class="form-control" placeholder="Usuario" id="Correo" name="Correo">
                                <span class="fa fa-envelope form-control-feedback"></span>
                            </div>

                            <div class="form-group has-feedback">
                                <label for="Nombre">Usuario:</label>
                                <input type="text" class="form-control" placeholder="Usuario" id="Usuario" name="Usuario">
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>

                            <div class="form-group has-feedback">
                                <label for="Nombre">Contrasena:</label>
                                <input type="text" class="form-control" placeholder="Usuario" id="Contrasena" name="Contrasena">
                                <span class="fa fa-key form-control-feedback"></span>
                            </div>

                            <div class="form-group has-feedback">
                                <label for="Nombre">Fecha Alta:</label></span>
                                <input type="date" class="form-control" placeholder="Usuario" id="Fecha_Alta" name="Fecha_Alta">
                                <span class="">
                            </div>

                            <div class="form-group has-feedback">
                                <label for="Nombre">User Rol:</label>
                                <input type="text" class="form-control" placeholder="Usuario" id="User_Rol_pk" name="User_Rol_pk">
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
