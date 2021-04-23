
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Gestion de Leyes
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

                        <form action="<?php echo base_url();?>mantenimiento/categorias/store" method="POST">
                        <label for="nombre">Formulario 1</label>
                        <hr>
                        <table id="formu1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th><label for="nombre">Ley:</label></th>
                                    <th><label for="descripcion">Fecha de Públicacion</label></th>
                                    <th><label for="nombre">Fecha de Ultima Reforma</label></th>
                                    <th><label for="descripcion">Fecha de Entrada en Vigor</label></th>
                                </tr>
                            </thead>
                            <tbody>          
                                <tr>
                                    <td><input type="text" class="form-control" id="nombre" name="nombre"></td>
                                    <td><input type="date" class="form-control" id="descripcion" name="descripcion"></td>
                                    <td><input type="date" class="form-control" id="nombre" name="nombre"></td>
                                    <td><input type="text" class="form-control" id="descripcion" name="descripcion"></td> 
                                </tr>
                            </tbody>
                        </table>
                        <table id="formu1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th><label for="nombre">Estado de la Ley</label></th>
                                    <th><label for="descripcion">Objeto de la Ley</label></th>
                                    <th><label for="nombre">Tipo de Ley</label></th>
                                </tr>
                            </thead>
                            <tbody>          
                                <tr>
                                    <td><input type="text" class="form-control" id="nombre" name="nombre"></td>
                                    <td><input type="text" class="form-control" id="descripcion" name="descripcion"></td>
                                    <td><input type="text" class="form-control" id="nombre" name="nombre"></td>                                                       
                                </tr>
                            </tbody>
                        </table>


                        <hr>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-flat"><label for="nombre"><spam class="fa fa-plus"></spam> Continuar</label></button>
                        </div>



                        <hr>
                        <label for="nombre">Formulario 2</label>
                        <hr>
                        
                        
                        
                        <div class="form-group">
                                <button type="submit" class="btn btn-success btn-flat"><label for="nombre"><spam class="fa fa-plus"></spam> Importar Articulos</label></button>
                                <button type="submit" class="btn btn-success btn-flat"><label for="nombre"><spam class="fa fa-plus"></spam> Agragr Articulo</label></button>
                            </div>
                        <table id="formu2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th><label for="nombre">Articulo</label></th>
                                    <th><label for="nombre">Tipo</label></th>
                                    <th><label for="nombre">descripcion</label></th>
                                    <th><label for="nombre">Ultima Reforma</label></th>
                                    <th><label for="nombre">Descripcion</label></th>
                                    <th><label for="nombre">Estatus</label></th>
                                </tr>
                            </thead>
                            <tbody>          
                                <tr>
                                    <td><input type="text" class="form-control" id="nombre" name="nombre"></td>
                                    <td><input type="text" class="form-control" id="nombre" name="nombre"></td>
                                    <td><input type="text" class="form-control" id="nombre" name="nombre"></td>
                                    <td><input type="text" class="form-control" id="nombre" name="nombre"></td>
                                    <td><input type="text" class="form-control" id="nombre" name="nombre"></td>
                                    <td><input type="text" class="form-control" id="nombre" name="nombre"></td>                                                        
                                </tr>
                            </tbody>
                        </table>



                        
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

