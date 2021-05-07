        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Buscador Inteligente  
                <small>Busquedas</small>
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="box box-solid">
                    <div class="box-body">
                        <!-- AQUI INICIA EL BODY -->

                        <?php if($this->session->flashdata("error")):?>
                            <div class="alert alert-warning alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
                             </div>
                        <?php endif;?>

                        <form action="<?php echo current_url();?>" method="POST" class="form-horizontal">
                            <div class="form-group">
                                <label for="" class="col-md-2 control-label">Palabra clave:</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="clave" value="<?php echo !empty($clave) ? $clave:'';?>">
                                </div>
                                <div class="col-md-4">
                                    <input type="submit" name="buscar" value="Buscar" class="btn btn-primary">
                                    <a href="<?php echo base_url(); ?>Menu/cBuscador" class="btn btn-danger">Restablecer</a>
                                </div>
                            </div>
                        </form>
                        <hr>
                        <div class="row">
                                <div class="col-md-12">
                                    <form action="<?php echo base_url();?>Menu/cBuscador/deleteall" method="POST">
                                    
                                        <table id="example" class="table table-bordered table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th style="text-align:center" class="col-md-1">
                                                    <button type="submit" name="delete_all" class="btn btn-danger btn-sm"><span class="fa fa-file-pdf-o"> PDF</span></button>
                                                </th>
                                                <th style="text-align:center" class="col-md-2">Ley</th>
                                                <th style="text-align:center" class="col-md-1">Artículo</th>
                                                <th style="text-align:center" class="col-md-6">Descripcion</th>
                                                <th style="text-align:center" class="col-md-1">Desplegar</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php if(!empty($terminos)):?>
                                                    <?php foreach($terminos as $termino):?>
                                                        <tr>
                                                            <td style="text-align:center" >
                                                                <input type="checkbox" name="checkbox_value[]" value="<?= $termino->pk_Datos_ley; ?>">
                                                            </td>
                                                            <td style="text-align:center" ><?php echo $termino->ley;?></td>
                                                            <td style="text-align:center" ><?php echo $termino->Articulo;?></td>
                                                            <td><?php echo $termino->Descripcion;?></td>
                                                            <td>
                                                                <div class="btn-group">    
                                                                    <button type="button" class="btn btn-info btn-view-buscador" data-toggle="modal" data-target="#modal-default" value="<?php echo $termino->pk_Datos_ley ;?>">
                                                                        <span class="fa fa-search"></span>
                                                                    </button>
                                                                    <a class="btn btn-primary btn-flat" type="button" onclick="Show()"><span class="fa fa-plus"></span></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach;?>
                                                <?php endif;?>

                                            </tbody>
                                        </table>
                                    </form>

                                    <br>
                                    <hr>
                                    <div class="panel panel-default" id="info" style="visibility:hidden;">
                                        <div class="panel-heading">Ley: </div>
                                        <div class="panel-body">
                                            Contenido:
                                        </div>
                                        <div class="btn-group">    

                                            <a class="btn btn-primary btn-flat" type="button" onclick="Hide()"><span class="fa fa-minus"></span></a>
                                        </div>
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

<script>
    function Show() {
    document.getElementById("info").style.visibility = "visible";
    }
    function Hide() {
    document.getElementById("info").style.visibility = "hidden";
    }
</script>
