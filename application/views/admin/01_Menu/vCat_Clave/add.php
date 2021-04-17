
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Registro de Leyes
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
                        <form action="<?php echo base_url();?>00_Menu/cRoles/store" method="POST">


                            <div class="form-group">
                                <label for="Termino_Clave">Termino_Clave:</label>
                                <input type="text" class="form-control" id="Termino_Clave" name="Termino_Clave">
                            </div>
                            <div class="form-group">
                                <label for="Usuario_pk">Usuario_pk:</label>
                                <input type="text" class="form-control" id="Usuario_pk" name="Usuario_pk">
                            </div>
                            <div class="form-group">
                                <label for="Fecha_Alta">Fecha_Alta:</label>
                                <input type="text" class="form-control" id="Fecha_Alta" name="Fecha_Alta">
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
