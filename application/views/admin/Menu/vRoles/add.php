
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
                    <div class="col-md-6">
                        
                        <?php if($this->session->flashdata("error")):?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
                             </div>
                        <?php endif;?>
                        
                        <form action="<?php echo base_url();?>Menu/cRoles/store" method="POST">

                            <div class="form-group has-feedback <?php echo form_error('Nombre_Rol') == true ? 'has-error':''?>">
                                <label for="Nombre_Rol">Nombre del Rol:</label>
                                    <input type="text" class="form-control" id="Nombre_Rol" name="Nombre_Rol">
                                    <?php echo form_error("Nombre_Rol", "<span class='help-block'>","</span>");?>
                                    <span class="fa fa-user form-control-feedback"></span>
                            </div>

                            <div class="form-group has-feedback <?php echo form_error('Descripcion') == true ? 'has-error':''?>">
                                <label for="Descripcion">Descripción:</label>
                                    <textarea class="form-control" placeholder="Descripción" id="Descripcion" name="Descripcion" rows="8" cols="60"></textarea>
                                    <?php echo form_error("Descripcion", "<span class='help-block'>","</span>");?>
                                    <span class="form-control-feedback"></span>
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