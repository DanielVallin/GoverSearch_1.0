        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Gestion de Leyes  
                <small>List</small>
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
                                <small class="text-muted"></small>
                            </div>
                        </div>
                        <a href="<?php echo base_url();?>00_Menu/cGestion/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Gestion</a>
                        <a href="<?php echo base_url();?>00_Menu/cGestion/add" class="btn btn-success btn-flat"><span class="fa fa-file-excel-o"></span> Exportar Excel</a>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Campo</th>
                                        <th>Campo</th>
                                        <th>Campo</th>
                                        <th>opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                        <tr>
                                            <td>Campo</td>
                                            <td>Campo</td>
                                            <td>Campo</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info btn-view" data-toggle="modal" data-target="#modal-default" value="#"><span class="fa fa-search"></span></button>
                                                    <a href="#" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                                    <a href="#" class="btn btn-danger btn-trash"><span class="fa fa-remove"></span></a>
                                                </div>
                                            </td>
                                        </tr>

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
