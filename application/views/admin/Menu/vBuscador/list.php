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
                                    <div class="col-md-3">
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
                                            <th class="col-md-1">Ter. Clave</th>
                                            <th class="col-md-1">Ley</th>
                                            <th class="col-md-2">Artículo</th>
                                            <th class="col-md-7">Descripcion</th>
                                            <th class="col-md-1">Consultas</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(!empty($terminos)):?>
                                                <?php foreach($terminos as $termino):?>
                                                    <tr>
                                                        <td><?php echo $termino->termino;?></td>
                                                        <td><?php echo $termino->ley;?></td>
                                                        <td><?php echo $termino->Articulo;?></td>
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
                                                    <tr>
                                                    <td colspan="5">
                                                            <div class="collapse" id="<?php echo $termino->pk_Datos_ley ;?>">
                                                                <div class="card card-body">
                                                                    Inromacion
                                                                    <hr>
                                                                    <?php echo $termino->termino;?>
                                                                    <?php echo $termino->ley;?>
                                                                    <?php echo $termino->Articulo;?>
                                                                    <?php echo $termino->Descripcion;?>
                                                                </div>
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
        <h4 class="modal-title">Informacion</h4>
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
