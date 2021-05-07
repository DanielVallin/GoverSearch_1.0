
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Registro de Trminos Clave
        <small>Editar</small>
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

                        <form action="<?php echo base_url();?>administrador/Permisos/update" method="POST">

                        <input type="hidden" name="pk_Permiso" value="<?php echo $permiso->pk_Permiso ;?>" >


                            <div class="form-group">
                                <label for="rol">Rol</label>
                                <select name="rol" id="rol" class="form-control" disabled="disabled">
                                    <?php foreach($roles as $rol): ?>
                                        <option value="<?php echo $rol->pk_Rol;?>"
                                            <?php echo $rol->pk_Rol  == $permiso->rol_pk  ? "selected" : ""  ?>> 
                                            <?php echo $rol->Nombre_Rol ?> 
                                        </option>
                                    <?php endforeach;?>
                                </select>
                            <div>
                            
                            <hr>
                            <div class="form-group">
                                        <label for="read">Leer: </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="read" value="1" <?php echo $permiso->read == 1 ? "checked":""; ?>>Si
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="read" value="0" <?php echo $permiso->read == 0 ? "checked":""; ?>>No
                                        </label>
                            </div>
                            <div class="form-group">
                                    <label for="insert">Insertar: </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="insert" value="1" <?php echo $permiso->insert == 1 ? "checked":""; ?>>Si
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="insert" value="0" <?php echo $permiso->insert == 0 ? "checked":""; ?>>No
                                        </label>
                            </div>
                            <div class="form-group">
                                        <label for="read">Actualizar: </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="update" value="1" <?php echo $permiso->update == 1 ? "checked":""; ?>>Si
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="update" value="0" <?php echo $permiso->update == 0 ? "checked":""; ?>>No
                                        </label>
                            </div>
                            <div class="form-group">
                                        <label for="read">Borrar: </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="delete" value="1" <?php echo $permiso->delete == 1 ? "checked":""; ?>>Si
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="delete" value="0" <?php echo $permiso->delete == 0 ? "checked":""; ?>>No
                                        </label>
                            </div>
                            <div class="form-group">
                                        <button type="submit" class="btn btn-success">
                                        <span class="fa fa-save"></span>
                                        Guardar
                                        </button>
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
