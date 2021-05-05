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
                                                    <button type="submit" name="delete_all" class="btn btn-success btn-sm">Delete</button>
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
                                                            <td style="text-align:center" >
                                                                <p name="ley" ><?php echo $termino->ley;?></p>
                                                            </td>
                                                            <td style="text-align:center" ><?php echo $termino->Articulo;?></td>
                                                            <td><?php echo $termino->Descripcion;?></td>
                                                            <td>
                                                                <div class="btn-group">    
                                                                    <a class="btn btn-primary" data-toggle="collapse" href="#<?php echo $termino->pk_Datos_ley ;?>" role="button" aria-expanded="false" aria-controls="collapseExample">                                                                    
                                                                        <span class="pull-right-container">
                                                                            <i class="fa fa-angle-left pull-right"></i>
                                                                        </span>
                                                                    </a> 
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach;?>
                                                <?php endif;?>

                                            </tbody>
                                        </table>
                                    </form>
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

