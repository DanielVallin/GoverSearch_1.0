
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Registro de Leyes
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
                        <form action="<?php echo base_url();?>00_Menu/cReg_Leyes/update" method="POST">
                        <input type="hidden" value="<?php echo $leyes->pk_Datos_Ley;?>" name="pk_Ter_Clave">

                            <div class="form-group has-feedback">
                                <label for="Nombre_de_Ley">Nombre de Ley:</label>
                                <input type="text" placeholder="Nueva Ley" class="form-control" id="Nombre_de_Ley" name="Nombre_de_Ley" value="<?php echo $leyes->Nombre_de_Ley;?>">
                                <span class="fa fa-bookmark form-control-feedback"></span>
                            </div>

                            <div class="form-group has-feedback">
                                <label for="Numero_de_Articulo">Número de Artículo:</label>
                                <input type="text" class="form-control" id="Numero_de_Articulo" name="Numero_de_Articulo" value="<?php echo $leyes->Numero_de_Articulo;?>">
                                <span class="fa fa-bookmark form-control-feedback"></span>
                            </div>

                            <div class="form-group has-feedback">
                                <label for="Detalle_Art">Detalle Art:</label>
                                <input type="text" class="form-control" id="Detalle_Art" name="Detalle_Art" value="<?php echo $leyes->Detalle_Art;?>">
                                <span class="fa fa-bookmark form-control-feedback"></span>
                            </div>
                            
                            <div class="form-group">
                                <label for="Grupo_pk">Grupo:</label>
                                <select name="Grupo_pk" id="Grupo_pk" class="form-control">
                                    
                                    <?php foreach($gpleyes as $Grupo):?>
                                        <?php if($Grupo->pk_Gpo_Ley == $leyes->Grupo_pk): ?>
                                        <option value="<?php echo $Grupo->pk_Gpo_Ley?>"><?php echo $Grupo->Nombre_de_Grupo;?></option>
                                    <?php endforeach;?>

                                </select>
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
