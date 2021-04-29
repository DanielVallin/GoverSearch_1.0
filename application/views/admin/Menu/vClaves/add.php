
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Registro de Trminos Clave
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

                        <form action="<?php echo base_url();?>Menu/cClaves/store" method="POST">
                            <div class="form-group has-feedback <?php echo form_error('Termino_Clave') == true ? 'has-error':''?>">
                                <label for="Termino_Clave">Término Clave:</label>
                                    <input type="text" class="form-control" id="Termino_Clave" name="Termino_Clave">
                                    <?php echo form_error("Termino_Clave", "<span class='help-block'>","</span>");?>
                                    <span class="fa fa-bookmark form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="Usuario_pk">Usuario:</label>
                                <select name="Usuario_pk" id="Usuario_pk" class="form-control">                                    
                                    <?php foreach($usuarios as $usuario):?>
                                        <option value="<?php echo $usuario->pk_Usuario?>">
                                            <?php echo $usuario->Nombre; echo " "; echo $usuario->Apellidos;?>
                                        </option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group has-feedback <?php echo form_error('Fecha_Alta') == true ? 'has-error':''?>">
                                <label for="Fecha_Alta">Fecha de Alta:</label>
                                <input type="date" class="form-control" id="Fecha_Alta" name="Fecha_Alta">
                                <?php echo form_error("Fecha_Alta", "<span class='help-block'>","</span>");?>
                            </div>
                            <div class="form-group">
                               <button type="submit" class="fa fa-plus btn btn-success btn-flat"> Guardar</button>                                
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
