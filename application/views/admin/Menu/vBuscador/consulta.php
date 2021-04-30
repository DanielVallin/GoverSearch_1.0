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
                                <div class="col-md-12">
                                    <table id="example" class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Ley</th>
                                            <th>Titulo</th>
                                            <th>seccion</th>
                                            <th>Articulo</th>
                                            <th>descripcion</th>
                                            <th>Tipo</th>
                                            <th>Titulo</th>
                                            <th>Nom. Articulo</th>
                                            <th>Consultas</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(!empty($terminos)):?>
                                                <?php foreach($terminos as $termino):?>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>
                                                            <div class="btn-group"> 
                                                                <a href="<?php echo base_url(); ?>Menu/cBuscador/consulta" class="btn btn-warning btn-flat"><span class="fa fa-angle-double-right "></span></a>
                                                                <a href="<?php echo base_url(); ?>Menu/cBuscador" class="btn btn-danger btn-flat"><span class="fa fa-file-pdf-o "></span></a>                                                           
                                                            </div>
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
