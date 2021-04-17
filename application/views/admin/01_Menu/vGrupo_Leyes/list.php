        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Grupo Leyes
                <small>Listado</small>
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
                                <a href="<?php echo base_url();?>00_Menu/cGrupo_Leyes/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Grupo</a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre_de_Grupo</th>
                                        <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!empty($gpleyes)):?>
                                            <?php foreach($gpleyes as $gpley):?>
                                                <tr>
                                                    <td><?php echo $gpley->pk_Gpo_Ley;?></td>
                                                    <td><?php echo $gpley->Nombre_de_Grupo;?></td>

                                                    <td>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-info btn-view" data-toggle="modal" data-target="#modal-default" value="<?php echo $gpley->pk_Gpo_Ley;?>"><span class="fa fa-search"></span>
                                                            </button>
                                                            <a href="<?php echo base_url()?>00_Menu/cGrupo_Leyes/edit/<?php echo $gpley->pk_Gpo_Ley;?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                                            <a href="<?php echo base_url();?>00_Menu/cGrupo_Leyes/delete/<?php echo $gpley->pk_Gpo_Ley;?>" class="btn btn-danger btn-remove"><span class="fa fa-remove"></span></a>
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
