
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
                    <div class="col-md-6">
                        <?php if($this->session->flashdata("error")):?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
                             </div>
                        <?php endif;?>
                        <form action="<?php echo base_url();?>00_Menu/cGrupo_Leyes/store" method="POST">
                            
                            <div class="form-group has-feedback">
                                <label for="Nombre">Nombre del Grupo:</label>
                                <input type="text" class="form-control" placeholder="Usuario" id="Nombre_de_Grupo" name="Nombre_de_Grupo">
                                <span class="glyphicon glyphicon-bookmark form-control-feedback"></span>
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
