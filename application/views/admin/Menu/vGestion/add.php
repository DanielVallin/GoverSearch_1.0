
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



                        <div class="form-group">                                
                            <form method="post" id="import_form" enctype="multipart/form-data">
                                <p><label>Select Excel File</label>
                                <input type="file" name="file" id="file" required accept=".xls, .xlsx" /></p>
                                    <br />
                                <input type="submit" name="import" value="Import" class="btn btn-info" />
                            </form>
                        </div>

                        <form action="<?php echo base_url();?>Menu/cGestion/store" method="POST">
                        
                            <!-- Formulario #1 -->

                            <div class="form-group has-feedback <?php echo form_error('Ley_pk') == true ? 'has-error':''?>">
                                <label for="Ley_pk">Ley:</label>
                                <select name="Ley_pk" id="Ley_pk" class="form-control">
<<<<<<< HEAD
                                    <?php foreach($leyes as $ley):?>
                                        <option value="<?php echo $ley->pk_Datos_Ley; ?>"><?php echo $ley->Nombre_de_Ley;?></option>
=======
                                    <?php foreach($usuarios as $usuario):?>
                                        <option value="<?php echo $usuario->pk_Usuario?>"><?php echo $usuario->Nombre, $usuario->Apellidos;?></option>
>>>>>>> master
                                    <?php endforeach;?>
                                </select>
                            </div>

                            <div class="form-group has-feedback <?php echo form_error('Fecha') == true ? 'has-error':''?>">
                                <label for="Fecha">Fecha:</label>
                                <?php echo form_error("Fecha", "<span class='help-block'>","</span>");?>
                                <input type="date" class="form-control" id="Fecha" name="Fecha">
                            </div>
                            
                            <div class="form-group has-feedback <?php echo form_error('FUltReforma') == true ? 'has-error':''?>">
                                <label for="FUltReforma">Fecha de Publicacion:</label>
                                <?php echo form_error("FUltReforma", "<span class='help-block'>","</span>");?>
                                <input type="date" class="form-control" id="FUltReforma" name="FUltReforma">
                            </div>
                            
<<<<<<< HEAD
                            <div class="form-group has-feedback <?php echo form_error('FEntradaVigo') == true ? 'has-error':''?>">
                                <label for="FEntradaVigo">Fecha de Entrada en Vigor:</label>
                                <?php echo form_error("FEntradaVigo", "<span class='help-block'>","</span>");?>
                                <input type="date" class="form-control" id="FEntradaVigo" name="FEntradaVigo">
=======
                            <div class="form-group has-feedback <?php echo form_error('FentradaVigo') == true ? 'has-error':''?>">
                                <label for="FentradaVigo">Fecha de Entrada en Vigor:</label>
                                <?php echo form_error("FentradaVigo", "<span class='help-block'>","</span>");?>
                                <input type="date" class="form-control" id="FentradaVigo" name="FentradaVigo">
>>>>>>> master
                            </div>
                            
                            <div class="form-group has-feedback <?php echo form_error('EstLey') == true ? 'has-error':''?>">
                                <label for="EstLey">Estado de la Ley:</label>
                                <select name="EstLey" id="EstLey" class="form-control">
                                        <option value="Vigente">Vigente</option>
                                        <option value="Derogada">Derogada</option>
                                </select>
                            </div>
                            
                            <div class="form-group has-feedback <?php echo form_error('ObjLey') == true ? 'has-error':''?>">
                                <label for="ObjLey">Objeto de la Ley:</label>ObjLey
                                    <input type="text" class="form-control" id="ObjLey" name="ObjLey">
                                    <?php echo form_error("ObjLey", "<span class='help-block'>","</span>");?>
                                    <span class="fa fa-bookmark form-control-feedback"></span>
                            </div>
                            
                            <div class="form-group has-feedback <?php echo form_error('TipoLey') == true ? 'has-error':''?>">
                                <label for="TipoLey">Tipo de Ley:</label>
                                <select name="TipoLey" id="TipoLey" class="form-control">
                                        <option value="Federal">Federal</option>
                                        <option value="Estatal">Estatal</option>
                                        <option value="General">General</option>
                                </select>
                            </div>
                            
                            <div class="form-group has-feedback <?php echo form_error('Introduccion') == true ? 'has-error':''?>">
                                    <label for="Introduccion">Introduccion:</label>
                                        <input type="text" class="form-control" id="Introduccion" name="Introduccion">
                                        <?php echo form_error("Introduccion", "<span class='help-block'>","</span>");?>
                                        <span class="fa fa-bookmark form-control-feedback"></span>
                                </div>

                           

                            <div class="form-group"> 
                                <a href="#" class="btn btn-primary btn-flat"><span class="fa fa-plus"> Agregar Art</span></a>
<<<<<<< HEAD
                                <a class="btn btn-primary btn-flat" type="button" onclick="ListaF()"><span class="fa fa-plus"> Continuar</span></a>
                                <a href="<?php echo base_url();?>Menu/cGestion/" class="btn btn-primary btn-flat"><span class="fa fa-backward"></span> Volver</a>                            
=======
                                <a class="btn btn-primary btn-flat" type="button" onclick="ListaF()"><span class="fa fa-plus"> continuar</span></a>
>>>>>>> master
                            </div>
                        </div>

                        <!-- Formulario #2 -->
                        
                            <div class="col-md-6" id="divlist" style="visibility:hidden;">
                                <div class="form-group has-feedback <?php echo form_error('Num_Articulo') == true ? 'has-error':''?>">
                                    <label for="Num_Articulo">Numero de Articulo</label>                        
                                        <input type="text" class="form-control" id="Num_Articulo" name="Num_Articulo">
                                        <?php echo form_error("Num_Articulo", "<span class='help-block'>","</span>");?>
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
                                    <label for="Ref_Titulo">Ref_Titulo:</label>
                                        <input type="text" class="form-control" id="Ref_Titulo" name="Ref_Titulo">
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
                                    <label for="Ref_Capitulo">Ref_Capitulo:</label>
                                        <input type="text" class="form-control" id="Ref_Capitulo" name="Ref_Capitulo">
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
                                    <label for="Inciso">Inciso:</label>
                                        <input type="text" class="form-control" id="Inciso" name="Inciso">
                                        <span class="fa fa-bookmark form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="Parrafo">Parrafo:</label>
                                        <input type="text" class="form-control" id="Parrafo" name="Parrafo">
                                        <span class="fa fa-bookmark form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="Descripcion">Descripción del Articulo:</label>
                                        <input type="text" class="form-control" id="Descripcion" name="Descripcion">
                                        <span class="fa fa-bookmark form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="UltReforma">Ultima Reforma: </label>
                                        <input type="date" class="form-control" id="UltReforma" name="UltReforma">
                                        <span class="fa fa-bookmark form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="Concepto">Concepto de la Ultima Reforma: </label>
                                        <input type="text" class="form-control" id="Concepto" name="Concepto">
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="Estatus">Estatus: </label>
                                        <select name="Estatus" id="Estatus" class="form-control">
                                                <option value = "Normal">Activo</option>
                                                <option value = "Transitorio">Derogado</option>
                                        </select>
                                </div>
                                <div class="form-group">
                                    <a class="btn btn-primary btn-flat" type="button" onclick="ListaF2()"><span class="fa fa-plus"> Volver</span></a>
                                </div>
                                <div class="form-group">
<<<<<<< HEAD
                                    <button type="submit" class="fa fa-plus btn btn-success btn-flat"> Guardar</button>         
=======
                                    <button type="submit" class="fa fa-plus btn btn-success btn-flat"> Guardar</button>                                
>>>>>>> master
                                </div>
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

<script>
    function ListaF() {
    document.getElementById("divlist").style.visibility = "visible";
    }
        function ListaF2() {
        document.getElementById("divlist").style.visibility = "hidden";
        }
</script>


<script>
$(document).ready(function(){

    $('#import_form').on('submit', function(event){
        event.preventDefault();
        $.ajax({
            url:"<?php echo base_url(); ?>Menu/excel_import/import",
            method:"POST",
            data:new FormData(this),
            contentType:false,
            cache:false,
            processData:false,
            success:function(data){
                $('#file').val('');
                alert(data);
            }
        })
    });
});
</script>