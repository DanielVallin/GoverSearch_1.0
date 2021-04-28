
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
                    <div class="col-md-3">
                    
                        <?php if($this->session->flashdata("error")):?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
                            </div>
                        <?php endif;?>

                        <form action="<?php echo base_url();?>mantenimiento/categorias/store" method="POST">
                            <!-- Formulario #1 -->
                            <div class="form-group has-feedback">
                                <label for="Ley_pk">Ley:</label>
                                    <input type="text" class="form-control" id="Ley_pk" name="Ley_pk">
                                    <span class="fa fa-bookmark form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="Fecha">Fecha de Publicacion:</label>
                                    <input type="date" class="form-control" id="Fecha" name="TerminFechao_Clave">
                            </div>
                            <div class="form-group has-feedback">
                                <label for="FUltReforma">Fecha de Publicacion:</label>
                                    <input type="date" class="form-control" id="FUltReforma" name="FUltReforma">
                            </div>
                            <div class="form-group has-feedback">
                                <label for="FentradaVigo">Fecha de Entrada en Vigor:</label>
                                    <input type="date" class="form-control" id="FentradaVigo" name="FentradaVigo">
                            </div>
                            <div class="form-group has-feedback">
                                <label for="EstLey">Estado de la Ley:</label>
                                <select name="EstLey" id="EstLey" class="form-control">
                                        <option value="Vigente">Vigente</option>
                                        <option value="Derogada">Derogada</option>
                                </select>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="ObjLey">Objeto de la Ley:</label>
                                    <input type="text" class="form-control" id="ObjLey" name="ObjLey">
                                    <span class="fa fa-bookmark form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="TipoLey">Tipo de Ley:</label>
                                <select name="TipoLey" id="TipoLey" class="form-control">
                                        <option value="Federal">Federal</option>
                                        <option value="Estatal">Estatal</option>
                                        <option value="General">General</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <a href="#" class="btn btn-primary btn-flat"><span class="fa fa-plus"> continuar</span></a>
                            </div>
                            <div class="form-group">
                                <a href="#" class="btn btn-primary btn-flat"><span class="fa fa-plus"> Importar</span></a>
                                <a href="#" class="btn btn-primary btn-flat"><span class="fa fa-plus"> Agregar Art</span></a>
                            </div>

                        </div>

                        <!-- Formulario #2 -->
                        
                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label for="Num_Articulo">Numero de Articulo</label>                        
                                    <input type="text" class="form-control" id="Num_Articulo" name="Num_Articulo">
                                    <span class="fa fa-bookmark form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="Tipo">Tipo:</label>
                                    <select name="Tipo" id="Tipo" class="form-control">
                                            <option value="Normal">Normal</option>
                                            <option value="Transitorio">Transitorio</option>
                                    </select>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="Titulo">Titulo:</label>
                                    <input type="text" class="form-control" id="Titulo" name="Titulo">
                                    <span class="fa fa-bookmark form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="NomTitulo">Nombre del Titulo:</label>
                                    <input type="text" class="form-control" id="NomTitulo" name="NomTitulo">
                                    <span class="fa fa-bookmark form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="Capitulo">Capitulo:</label>
                                    <input type="text" class="form-control" id="Capitulo" name="Capitulo">
                                    <span class="fa fa-bookmark form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="NomCapitulo">Nombre del Capitulo:</label>
                                    <input type="text" class="form-control" id="NomCapitulo" name="NomCapitulo">
                                    <span class="fa fa-bookmark form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="Fraccion">Fraccion:</label>
                                    <input type="text" class="form-control" id="Fraccion" name="Fraccion">
                                    <span class="fa fa-bookmark form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="Descripcion">Descripción del Articulo:</label>
                                    <input type="text" class="form-control" id="Descripcion" name="Descripcion">
                                    <span class="fa fa-bookmark form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="Concepto">Ultima reforma:</label>
                                    <input type="text" class="form-control" id="Concepto" name="Concepto">
                                    <span class="fa fa-bookmark form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="Termino_Clave">Concepto de la Reforma:</label>
                                    <select name="Tipo" id="Tipo" class="form-control">
                                            <option value="Normal">Activo</option>
                                            <option value="Transitorio">Derogado</option>
                                    </select>
                            </div>
                            <button type="submit" class="btn btn-success btn-flat"><label for="nombre"><spam class="fa fa-plus"></spam> Guardar</label></button>

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

