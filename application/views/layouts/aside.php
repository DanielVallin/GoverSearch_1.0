        <!-- =============================================== -->

        <!-- Left side column. contains the sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">      
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">NAVEGACION PRINCIPAL</li>
                    <li>
                        <a href="<?php echo base_url();?>">
                            <i class="fa fa-home"></i> <span>Inicio</span>
                        </a>
                    </li>
                    <!-- =============================================== -->
                        <li class="treeview">
                            <li>
                                <a href="https://consultorescig.mx/"><i class="fa fa-th"></i> <span> Servicios CIG</span>
                                </a>
                            </li>
                        </li>
                    <!-- =============================================== -->
                    <li class="treeview">
                            <li> 
                                <a href="https://consultorescig.mx/#blog"><i class="fa fa-th"></i> <span>Blog-CIG</span>
                                </a>
                            </li>
                        </li>
                    <!-- =============================================== -->
                    <li class="treeview">

                        <a href="#">
                            <i class="fa fa-circle-o"></i> <span>Grupo de Leyes</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                        </a>
                            <ul class="treeview-menu">
                                <?php foreach($cGrupos as $cGrupo):?>
                                    <li><a href="<?php echo base_url()?>Menu/cGrupo_Leyes/lista/<?php echo $cGrupo->pk_Gpo_Ley;?>" name="grupo" value="<?php echo $cGrupo->pk_Gpo_Ley;?>"><span><?php echo $cGrupo->Nombre_de_Grupo;?></span></a></li>
                                <?php endforeach;?>
                                
                            </ul>

                            
                        </li>
                    <!-- =============================================== -->
                    <li class="treeview">
                            <li>
                            <a href="<?php echo base_url();?>Menu/cBuscador"><i class="fa fa-search"></i><span> Buscador Inteligente</span></a>
                            </li>
                        </li>
                    <!-- =============================================== -->
                    <li class="treeview">
                            <li>
                            <a href="<?php echo base_url();?>Menu/cUsuarios"><i class="fa fa-list"></i><span> 1_Usuarios</span> </a>
                            </li>
                        </li>
                    <!-- =============================================== -->
                    <li class="treeview">
                            <li>
                            <a href="<?php echo base_url();?>Menu/cPagos"><i class="fa fa-credit-card"></i><span> 2_Aplicación de Pagos</span></a>
                            </li>
                        </li>
                    <!-- =============================================== -->
                    <li class="treeview">
                            <li>
                            <a href="<?php echo base_url();?>Menu/cRoles"><i class="fa fa-bookmark"></i><span> 3_Catalogo de Roles</span></a>
                            </li>
                        </li>
                    <!-- =============================================== -->
                    <li class="treeview">
                            <li>
                            <a href="<?php echo base_url();?>Menu/cGrupo_Leyes"><i class="fa fa-list"></i><span> 4_Grupo de Leyes</span></a>
                            </li>
                        </li>
                    <!-- =============================================== -->
                    <li class="treeview">
                            <li>
                            <a href="<?php echo base_url();?>Menu/cReg_Leyes"><i class="fa fa-id-card-o"></i><span> 5_Registro de Leyes</span></a>
                            </li>
                        </li>
                    <!-- =============================================== -->
                    <li class="treeview">
                            <li>
                            <a href="<?php echo base_url();?>Menu/cClaves"><i class="fa fa-list"></i><span> 6_Cat. Terminos Clave</span></a>
                            </li>
                        </li>
                    <!-- =============================================== -->
                    <li class="treeview">
                            <li>
                            <a href="<?php echo base_url();?>Menu/cTer_Clave"><i class="fa fa-cogs fa-fw"></i><span> 7_Conf. Terminos Clave</span></a>
                            </li>
                        </li>
                    <!-- =============================================== -->
                    <li class="treeview">
                            <li>
                            <a href="<?php echo base_url();?>Menu/cGestion"><i class="fa fa-cogs fa-fw"></i><span> 8_Gestion de Leyes</span></a>
                            </li>
                        </li>
                     <!-- =============================================== -->
                     <li class="treeview">
                        <a href="#">
                            <i class="fa fa-user"></i> <span>Cuenta</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url();?>Menu/cCuenta"><i class="fa fa-user-circle-o"></i> <span>Mi Cuenta</span></a></li>
                            <li><a href="<?php echo base_url();?>administrador/permisos"><i class="fa fa-sign-out"></i><span> Permisos</span></a></li>  
                            <li><a href="<?php echo base_url();?>auth/logout"><i class="fa fa-sign-out"></i><span> Cerrar Sesión</span></a></li>                                              
                        </ul>
                    </li>
                    <!-- =============================================== -->
                    
                    
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- =============================================== -->