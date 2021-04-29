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
                                    <table id="example1" class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Ley</th>
                                            <th>Artículo</th>
                                            <th>Descripcion</th>
                                            <th>Ir</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(!empty($terminos)):?>
                                                <?php foreach($terminos as $termino):?>
                                                    <tr>
                                                        <td><?php echo $termino->ley;?></td>
                                                        <td><?php echo $termino->Articulo;?></td>
                                                        <td><?php echo $termino->Descripcion;?></td>
                                                        <td>
                                                            <div class="btn-group"> 
                                                                <a href="#" class="btn btn-warning btn-flat"><span class="fa fa-angle-double-right "></span></a>                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php endforeach;?>
                                            <?php endif;?>
                                        </tbody>
                                    </table>
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
