        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Buscador Inteligente  
                <small>Consulta</small>
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="box box-solid">
                    <div class="box-body">
                        <!-- AQUI INICIA EL BODY -->
                        <hr>
                        <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="Ley_pk">Ley:</label>
                                        <select name="Ley_pk" id="Ley_pk" class="form-control chosen">
                                            <?php foreach($regleyes as $regley):?>
                                                <option value="<?php echo $regley->pk_Datos_Ley;?>"><?php echo $regley->Nombre_de_Ley;?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="Capitulo">Fecha de Públicacion:</label>
                                            <input type="date" class="form-control" id="Capitulo" name="Capitulo">
                                            <span class="fa fa-bookmark form-control-feedback"></span>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="Capitulo">Fecha de Ultima Reforma: </label>
                                            <input type="date" class="form-control" id="Capitulo" name="Capitulo">
                                            <span class="fa fa-bookmark form-control-feedback"></span>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="Capitulo">Fecha de Entrada en Vigor: </label>
                                            <input type="date" class="form-control" id="Capitulo" name="Capitulo">
                                            <span class="fa fa-bookmark form-control-feedback"></span>
                                    </div>
                                    <div  class="form-group has-feedback">
                                        <label for="Ley_pk">Estado de Entrega:</label>
                                        <select name="Ley_pk" id="Ley_pk" class="form-control chosen">
                                           
                                                <option value="Vigente">Vigente</option>
                                                <option value="Derogada">Derogada</option>
                                            
                                        </select>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="Capitulo">Objeto de la Ley: </label>
                                            <input type="text" class="form-control" id="Capitulo" name="Capitulo">
                                            <span class="fa fa-bookmark form-control-feedback"></span>
                                    </div>
                                    <div  class="form-group has-feedback">
                                        <label for="Ley_pk">Tipo de Ley:</label>
                                        <select name="Ley_pk" id="Ley_pk" class="form-control chosen">
                                           
                                                <option value="Federal">Federal</option>
                                                <option value="Estatal">Estatal</option>
                                                <option value="General">General</option>             
                                        </select>
                                    </div>
                                    <div>
                                    <a href="<?php echo base_url(); ?>" class="btn btn-primary">Volver</a>
                                </div>
                                </div>
                                

                                <div class="col-md-9">
                                    
                                    <div class="form-group has-feedback">
                                        <label for="Capitulo">Numero de Articulo: </label>
                                            <input type="text" class="form-control" id="Capitulo" name="Capitulo">
                                            <span class="fa fa-bookmark form-control-feedback"></span>
                                    </div>
                                    <div  class="form-group has-feedback">
                                        <label for="Ley_pk">Estado de Entrega:</label>
                                        <select name="Ley_pk" id="Ley_pk" class="form-control chosen">
                                                <option value="Vigente">Normal</option>
                                                <option value="Derogada">Transitorio</option>
                                        </select>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="Capitulo">Titulo: </label>
                                            <input type="text" class="form-control" id="Capitulo" name="Capitulo">
                                            <span class="fa fa-bookmark form-control-feedback"></span>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="Capitulo">Nombre del Titulo: </label>
                                            <input type="text" class="form-control" id="Capitulo" name="Capitulo">
                                            <span class="fa fa-bookmark form-control-feedback"></span>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="Capitulo">Capitulo: </label>
                                            <input type="text" class="form-control" id="Capitulo" name="Capitulo">
                                            <span class="fa fa-bookmark form-control-feedback"></span>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="Capitulo">Nombre del Capitulo: </label>
                                            <input type="text" class="form-control" id="Capitulo" name="Capitulo">
                                            <span class="fa fa-bookmark form-control-feedback"></span>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="Capitulo">Fraccion: </label>
                                            <input type="text" class="form-control" id="Capitulo" name="Capitulo">
                                            <span class="fa fa-bookmark form-control-feedback"></span>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="Capitulo">Descripción del Articulo: </label>
                                            <input type="text" class="form-control" id="Capitulo" name="Capitulo">
                                            <span class="fa fa-bookmark form-control-feedback"></span>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="Capitulo">Ultima reforma: </label>
                                            <input type="date" class="form-control" id="Capitulo" name="Capitulo">
                                            <span class="fa fa-bookmark form-control-feedback"></span>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="Capitulo">Concepto de la Reforma: </label>
                                            <input type="text" class="form-control" id="Capitulo" name="Capitulo">
                                            <span class="fa fa-bookmark form-control-feedback"></span>
                                    </div>
                                    <div  class="form-group has-feedback">
                                        <label for="Ley_pk">Estado de Entrega:</label>
                                        <select name="Ley_pk" id="Ley_pk" class="form-control chosen">
                                           
                                                <option value="Vigente">Activo</option>
                                                <option value="Derogada">Derogada</option>
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                        <!-- AQUI INICIA EL BODY -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
