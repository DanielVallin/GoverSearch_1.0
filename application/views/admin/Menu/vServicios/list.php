        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                BLOG  
                <small>Ultimas Noticias</small>
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="box box-solid">
                    <div class="box-body">
                        <!-- AQUI INICIA EL BODY -->
                        <div class="row">
                            <div class="col-md-12">
                                <small class="text-muted">Para tener mas conocimiento de nosotros, puedes visitar nuestro sitio WEB: </small>
                                <a href="https://consultorescig.mx/">ConsultoriasCIG</a><span class=""></span>Pagina Oficial CIG</a>
                            </div>
                        </div>
                        <hr>
                        <h3>Aqui las actualizaciones o noticias recientes, referente a las leyes y normas subidas a la pagina:</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Usuario</th>
                                        <th>Correo</th>
                                        <th>Fecha de Alta</th>
                                        <th>opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(!empty($categorias)):?>
                                    <?php foreach($categorias as $categoria):?>
                                        <tr>
                                            <td><?php echo $categoria->id;?></td>
                                            <td><?php echo $categoria->nombre;?></td>
                                            <td><?php echo $categoria->descripcion;?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info btn-view" data-toggle="modal" data-target="#modal-default" value="<?php echo $categoria->id;?>"><span class="fa fa-search"></span></button>
                                                    <a href="<?php echo base_url()?>mantenimiento/categorias/edit/<?php echo $categoria->id;?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                                    <a href="<?php echo base_url();?>mantenimiento/categorias/delete/<?php echo $categoria->id;?>" class="btn btn-danger btn-trash"><span class="fa fa-remove"></span></a>
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
