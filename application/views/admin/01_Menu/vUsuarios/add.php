
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
                                <label for="Telefono">Teléfono:</label>
                                <input type="text" class="form-control" placeholder="449..." id="Telefono" name="Telefono">
                                <span class="fa fa-phone-square form-control-feedback"></span>
                            </div>

                            <div class="form-group has-feedback">
                                <label for="Correo">e-mail:</label>
                                <input type="email" class="form-control" placeholder="correo@gmail.com" id="Correo" name="Correo">
                                <span class="fa fa-envelope form-control-feedback"></span>
                            </div>

                            <div class="form-group has-feedback">
                                <label for="Usuario">Usuario:</label>
                                <input type="text" class="form-control" placeholder="Usuario" id="Usuario" name="Usuario">
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>

                            <div class="form-group has-feedback">
                                <label for="Contrasena">Contraseña:</label>
                                <input type="password" class="form-control" placeholder="Contrasena" id="Contrasena" name="Contrasena">
                                <span class="fa fa-key form-control-feedback"></span>
                            </div>

                            <div class="form-group has-feedback">
                                <label for="Fecha_Alta">Fecha Alta:</label></span>
                                <input type="date" class="form-control" placeholder="Usuario" id="Fecha_Alta" name="Fecha_Alta">
                                <span class="">
                            </div>

                            <div class="form-group has-feedback">
                                <label for="User_Rol_pk">User Rol:</label>
                                <select name="User_Rol_pk" id="User_Rol_pk" class="form-control">
                                    
                                    <?php foreach($roles as $rol):?>
                                        <option value="<?php echo $rol->pk_Rol?>"><?php echo $rol->Nombre_Rol;?></option>
                                    <?php endforeach;?>

                                </select>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="fa fa-plus btn btn-success btn-flat"> Guardar</button>
                                
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
