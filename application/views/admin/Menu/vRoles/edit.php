
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Roles
        <small>Nuevo</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php if($this->session->flashdata("error")):?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>        
                             </div>
                        <?php endif;?>


                        <form action="<?php echo base_url();?>Menu/cRoles/update" method="POST">
                        <input type="hidden" value="<?php echo $rol->pk_Rol;?>" name="pk_Rol">


                            <div class="form-group <?php echo form_error('Nombre_Rol') == true ? 'has-error':''?>">
                                <label for="Nombre_Rol">Nombre_Rol:</label>
                                <input type="text" class="form-control" id="Nombre_Rol" name="Nombre_Rol" value="<?php echo $rol->Nombre_Rol?>">
                                <?php echo form_error("Nombre_Rol", "<span class='help-block'>","</span>");?>
                            </div>
                            <div class="form-group">
                                <label for="Descripcion">Descripcion:</label>
                                <input type="text" class="form-control" id="Descripcion" name="Descripcion" value="<?php echo $rol->Descripcion?>">
                            </div>
                            
                            <div class="form-group">
                                <label for="Estado">Estado:</label>
                                <select name="Estado" id="Estado" class="form-control">
                                   
                                    <option value="1" >Activo</option>
                                    <option value="0" >Inactivo</option>
                                                    
                                </select>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                                <a href="<?php echo base_url();?>Menu/cRoles" class="btn btn-primary btn-flat"><span class="fa fa-backward"></span> Volver</a>
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
