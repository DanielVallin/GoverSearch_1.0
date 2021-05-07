
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Grupos de Leyes
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
                        <form action="<?php echo base_url();?>Menu/cGrupo_Leyes/update" method="POST">
                            <input type="hidden" value="<?php echo $leyes->pk_Gpo_Ley;?>" name="pk_Gpo_Ley">

                            <div class="form-group has-feedback <?php echo form_error('Nombre_de_Grupo') == true ? 'has-error':''?>">

                                <label for="Nombre_de_Grupo">Nombre del Grupo:</label>
                                <input type="text" class="form-control" id="Nombre_de_Grupo" name="Nombre_de_Grupo" value="<?php echo $leyes->Nombre_de_Grupo ?>">
                                <?php echo form_error("Nombre_de_Grupo", "<span class='help-block'>","</span>");?>
                                <span class="glyphicon glyphicon-bookmark form-control-feedback"></span>
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
                                <a href="<?php echo base_url();?>Menu/cGrupo_Leyes/" class="btn btn-primary btn-flat"><span class="fa fa-backward"></span> Volver</a>
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
