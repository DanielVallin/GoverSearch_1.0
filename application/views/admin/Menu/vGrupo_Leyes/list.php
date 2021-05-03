        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Grupos de Leyes
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
                                <a href="<?php echo base_url();?>Menu/cGrupo_Leyes/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Grupo</a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre del Grupo</th>
                                        <th>Estatus</th>
                                        <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!empty($gpleyes)):?>
                                            <?php foreach($gpleyes as $gpley):?>
                                                <tr>
                                                    <td><?php echo $gpley->pk_Gpo_Ley ;?></td>
                                                    <td><?php echo $gpley->Nombre_de_Grupo;?></td>
                                                    <td>
                                                        <?php if($gpley->Estado == 0): ?>
                                                            <span class="fa fa-times"> Inactivo</span>
                                                        <?php else:?>
                                                            <span class="fa fa-check"> Activo</span>
                                                        <?php endif;?>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-info btn-view-grupos" data-toggle="modal" data-target="#modal-default" >
                                                                <span class="fa fa-search"></span>
                                                            </button>
                                                            <a href="#" class="btn btn-warning btn-flat"><span class="fa fa-angle-double-right "></span></a>
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



        <div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Informacion de la Categoria</h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
