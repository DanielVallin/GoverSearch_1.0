
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Término Clave
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

                        <form action="<?php echo base_url();?>00_Menu/cTer_Clave/store" method="POST">
                            
                            <div class="form-group has-feedback">
                                <label for="Termino_Clave_pk">Término Clave:</label>
                                <select name="Termino_Clave_pk" id="Termino_Clave_pk" class="form-control">
                                    <?php foreach($cClaves as $cClave):?>
                                        <option value="<?php echo $cClave->pk_Ter_Clave;?>"><?php echo $cClave->Termino_Clave;?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <hr>
                            <div class="form-group has-feedback">
                                <label for="Ley_pk">Ley:</label>
                                <select name="Ley_pk" id="Ley_pk" class="form-control chosen">
                                    <?php foreach($regleyes as $regley):?>
                                        <option value="<?php echo $regley->pk_Datos_Ley;?>"><?php echo $regley->Nombre_de_Ley;?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>

                            <div class="form-group has-feedback">
                                <label for="Descripcion">Descripción:</label>
                                    <textarea class="form-control" placeholder="Descripción" id="Descripcion" name="Descripcion" rows="8" cols="60"></textarea>
                                    <span class="form-control-feedback"></span>
                            </div>

                            <div class="form-group has-feedback">
                                <label for="Articulo">Artículo:</label>
                                    <input type="number" placeholder="2" class="form-control" id="Articulo" name="Articulo">
                                    <span class="fa fa-bookmark form-control-feedback"></span>
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
