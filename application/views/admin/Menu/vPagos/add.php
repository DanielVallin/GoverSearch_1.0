
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        PAGOS
        <small>Nuevo</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <?php if($this->session->flashdata("error")):?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
                             </div>
                        <?php endif;?>
                        <form action="<?php echo base_url();?>Menu/cPagos/store" method="POST">

                            <div class="form-group has-feedback">
                                <label for="User_Rol_pk">Usuario:</label>
                                <select name="User_Rol_pk" id="User_Rol_pk" class="form-control">
                                    
                                    <?php foreach($usuarios as $usuario):?>
                                        <option value="<?php echo $usuario->pk_Usuario?>"><?php echo $usuario->Nombre; echo " "; echo $usuario->Apellidos;?></option>
                                    <?php endforeach;?>

                                </select>
                            </div>

                            <div class="form-group has-feedback">
                                <label for="Descripcion">Descripción:</label>
                                <textarea class="form-control" placeholder="Descripción" id="Descripcion" name="Descripcion" rows="8" cols="60"></textarea>
                                <span class=" form-control-feedback"></span>
                            </div>

                            <div class="form-group has-feedback">
                                <label for="Folio_Pago">Folio de Pago:</label>
                                <input type="text" class="form-control" placeholder="xxxxx" id="Folio_Pago" name="Folio_Pago">
                                <span class="fa fa-cc-visa form-control-feedback"></span>
                            </div>

                            <div class="form-group has-feedback">
                                <label for="Fecha_Pago">Fecha_Pago:</label>
                                <input type="date" class="form-control" placeholder="Usuario" id="Fecha_Pago" name="Fecha_Pago">
                            </div>

                            <div class="form-group has-feedback">
                                <label for="Consepto_Pago">Consepto_Pago:</label>
                                <input type="text" class="form-control" placeholder="Mensualidad" id="Consepto_Pago" name="Consepto_Pago">
                                <span class="fa fa-money form-control-feedback"></span>
                            </div>

                            <div class="form-group has-feedback">
                                <label for="Importe">Importe:</label>
                                <input type="number" class="form-control" placeholder="00.00" id="Importe" name="Importe">
                                <span class="fa fa-money form-control-feedback"></span>
                            </div>


                            <div class="form-group">
                            <button type="submit" class="fa fa-plus btn btn-success btn-flat"> Guardar</button>
                            <a href="<?php echo base_url();?>Menu/cPagos" class="btn btn-primary btn-flat"><span class="fa fa-backward"></span> Volver</a>                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
