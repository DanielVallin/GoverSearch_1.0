        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Registro de Leyes
                <small>Listado</small>
                <a href="<?php echo base_url();?>Menu/cReg_Leyes/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Registro</a>                            

                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="box box-solid">
                    <div class="box-body">
                        <!-- AQUI INICIA EL BODY -->
                        <div class="row">
                            
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <table id="example" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Nombre de la Ley</th>
                                        <th>Grupo</th>                                        
                                        <th>Estado</th>
                                        <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(!empty($regleyes)):?>
                                    <?php foreach($regleyes as $regley):?>
                                        <tr>
                                            <td><?php echo $regley->Nombre_de_Ley; ?></td>
                                            <td><?php echo $regley->grupos;?></td>
                                            <td>
                                                <?php if($regley->Estado == 0): ?>
                                                    <span class="fa fa-times"> Inactivo</span>
                                                <?php else:?>
                                                    <span class="fa fa-check"> Activo</span>
                                                <?php endif;?>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="<?php echo base_url()?>Menu/cPagos/edit/<?php echo $regley->pk_Datos_Ley;?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                                    <a href="<?php echo base_url();?>Menu/cPagos/delete/<?php echo $regley->pk_Datos_Ley;?>" class="btn btn-danger btn-remove"><span class="fa fa-remove"></span></a>
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
