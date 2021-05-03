        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Grupos de Leyes
                <small> </small>
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
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombrede la Ley</th>
                                        <th>Estatus</th>
                                        <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!empty($gpleyes)):?>
                                            <?php foreach($gpleyes as $gpley):?>
                                                <tr>
                                                    <td><?php echo $gpley->pk_Datos_Ley;?></td>
                                                    <td><?php echo $gpley->Nombre_de_Ley;?></td>
                                                    <td>
                                                        <?php if($gpley->Estado == 0): ?>
                                                            <span class="fa fa-times"> Inactivo</span>
                                                        <?php else:?>
                                                            <span class="fa fa-check"> Activo</span>
                                                        <?php endif;?>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="<?php echo base_url(); ?>Menu/cGrupo_Leyes/consulta" class="btn btn-warning btn-flat"><span class="fa fa-angle-double-right "></span></a>                                                          
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


