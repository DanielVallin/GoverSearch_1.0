        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Configuración de Terminos Clave
                <small>Listado</small>
                <a href="<?php echo base_url();?>Menu/cTer_Clave/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Termino</a>
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
                                    
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <table id="example1" class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Consecutivo</th>
                                            <th>Ley</th>
                                            <th>Artículo</th>
                                            <th>Descripcion</th>
                                            <th>Estado</th>
                                            <th>Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(!empty($terminos)):?>
                                                <?php foreach($terminos as $termino):?>
                                                    <tr>
                                                        <td><?php echo $termino->pk_Datos_ley;?></td>
                                                        <td><?php echo $termino->ley;?></td>
                                                        <td><?php echo $termino->Articulo;?></td>
                                                        <td><?php echo $termino->Descripcion;?></td>
                                                        <td>
                                                            <?php if($termino->Estado == 0): ?>
                                                                <span class="fa fa-times"> Inactivo</span>
                                                            <?php else:?>
                                                                <span class="fa fa-check"> Activo</span>
                                                            <?php endif;?>
                                                        </td>
                                                        <td>
                                                            <div class="btn-group">
                                                                
                                                                <a href="<?php echo base_url()?>Menu/cTer_Clave/edit/<?php echo $termino->pk_Datos_ley;?>" class="btn btn-warning btn-flat"><span class="fa fa-pencil"></span></a>
                                                                <a href="<?php echo base_url();?>Menu/cTer_Clave/delete/<?php echo $termino->pk_Datos_ley;?>" class="btn btn-danger btn-remove"><span class="fa fa-remove"></span></a>
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
