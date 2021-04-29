
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
                        <form action="<?php echo base_url();?>Menu/cUsuarios/update" method="POST">
                        <input type="hidden" name="pk_Usuario" value="<?php echo $usuarios->pk_Usuario;?>">

                            
                            <div class="form-group has-feedback <?php echo form_error('Nombre') == true ? 'has-error':''?>">
                                <label for="Nombre">Nombre:</label>
                                <input type="text" class="form-control" placeholder="Usuario" id="Nombre" name="Nombre" value="<?php echo $usuarios->Nombre; ?>">
                                <?php echo form_error("Nombre", "<span class='help-block'>","</span>");?>
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>

                            <div class="form-group has-feedback <?php echo form_error('Apellidos') == true ? 'has-error':''?>">
                                <label for="Nombre">Apellidos:</label>
                                <input type="text" class="form-control" placeholder="Apellidos" id="Apellidos" name="Apellidos" value="<?php echo $usuarios->Apellidos;?>">
                                <?php echo form_error("Apellidos", "<span class='help-block'>","</span>");?>
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>

                            <div class="form-group has-feedback <?php echo form_error('Telefono') == true ? 'has-error':''?>">
                                <label for="Telefono">Teléfono:</label>
                                <input type="text" class="form-control" placeholder="449..." id="Telefono" name="Telefono" value="<?php echo $usuarios->Telefono;?>">
                                <?php echo form_error("Telefono", "<span class='help-block'>","</span>");?>
                                <span class="fa fa-phone-square form-control-feedback"></span>
                            </div>

                            <div class="form-group has-feedback <?php echo form_error('Correo') == true ? 'has-error':''?>">
                                <label for="Correo">e-mail:</label>
                                <input type="email" class="form-control" placeholder="correo@gmail.com" id="Correo" name="Correo" value="<?php echo $usuarios->Correo;?>">
                                <?php echo form_error("Correo", "<span class='help-block'>","</span>");?>
                                <span class="fa fa-envelope form-control-feedback"></span>
                            </div>

                            <div class="form-group has-feedback <?php echo form_error('Usuario') == true ? 'has-error':''?>">
                                <label for="Usuario">Usuario:</label>
                                <input type="text" class="form-control" placeholder="Usuario" id="Usuario" name="Usuario" value="<?php echo $usuarios->Usuario;?>">
                                <?php echo form_error("Usuario", "<span class='help-block'>","</span>");?>
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>


                            <div class="form-group has-feedback <?php echo form_error('Fecha_Alta') == true ? 'has-error':''?>">
                                <label for="Fecha_Alta">Fecha Alta:</label></span>
                                <input type="date" class="form-control" placeholder="Fecha_Alta" id="Fecha_Alta" name="Fecha_Alta" value="<?php echo $usuarios->Fecha_Alta;?>">
                                <?php echo form_error("Fecha_Alta", "<span class='help-block'>","</span>");?>
                                <span class="">
                            </div>

                            <div class="form-group has-feedback <?php echo form_error('User_Rol_pk') == true ? 'has-error':''?>">
                                <label for="User_Rol_pk">User Rol:</label>
                                <select name="User_Rol_pk" id="User_Rol_pk" class="form-control">
                                    <?php foreach($roles as $rol):?>
                                        
                                        <?php if($rol->pk_Rol == $usuarios->User_Rol_pk): ?>
                                                <option value="<?php echo $rol->pk_Rol?>" selected><?php echo $rol->Nombre_Rol;?></option>
                                            <?php else: ?>
                                                <option value="<?php echo $rol->pk_Rol?>"><?php echo $rol->Nombre_Rol;?></option>
                                        <?php endif; ?>

                                    <?php endforeach;?>        



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
