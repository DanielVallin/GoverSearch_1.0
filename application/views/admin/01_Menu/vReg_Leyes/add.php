
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
                                <label for="Nombre_de_Ley">Nombre de Ley:</label>
                                <input type="text" class="form-control" id="Nombre_de_Ley" name="Nombre_de_Ley">
                            </div>
                            <div class="form-group">
                                <label for="Numero_de_Articulo">Numero de Articulo:</label>
                                <input type="text" class="form-control" id="Numero_de_Articulo" name="Numero_de_Articulo">
                            </div>
                            <div class="form-group">
                                <label for="Detalle_Art">Detalle Art:</label>
                                <input type="text" class="form-control" id="Detalle_Art" name="Detalle_Art">
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
