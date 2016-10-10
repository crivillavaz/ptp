<div class="horizontal-bar sidebar">
                <div class="page-sidebar-inner slimscroll">
                    
                    <ul class="menu accordion-menu">
                        <li class="active"><?php echo $this->Html->link('<span class="menu-icon glyphicon glyphicon-home"></span><p>Inicio</p>', array('controller' => 'Users', 'action' => 'welcome'), array('class' => 'waves-effect waves-button', 'escape' => false)) ?></li>
                        <?php if($current_user['role'] == 'admin'): ?>
                            <li class="droplink"><a href="http://ptpsystem.net/Users/index" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-user"></span><p>Usuarios</p><span class="arrow"></span></a>
                             <ul class="sub-menu">
                                <li><?php echo $this->Html->link('Cursos DC3', array('controller' => 'courses', 'action' => 'index')) ?></li>
                                <!-- <li><?php //echo $this->Html->link('Cursos de inducción', array('controller' => 'courses', 'action' => 'induccion')) ?></li>
                                <li><?php //echo $this->Html->link('Actualización del imss', array('controller' => 'courses', 'action' => 'imss')) ?></li> -->
                            </ul>
                        </li>
                         <li class="droplink"><a href="http://ptpsystem.net/Permissions/index" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-edit"></span><p>Permisos de Trabajo</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><?php echo $this->Html->link('Listar Permisos', array('controller' => 'Permissions', 'action' => 'index')) ?></li>
                                <li><?php echo $this->Html->link('Crear Permiso', array('controller' => 'Permissions', 'action' => 'add')) ?></li>
                                <li><a href="#">Estatus</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><span class="menu-icon glyphicon glyphicon-edit"></span><?php echo $this->Html->link('Contratistas', array('controller' => 'contractors', 'action' => 'index')) ?></li>

                        <li class="droplink"><a href="http://ptpsystem.net/Stages/index" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-edit"></span><p>Análisis de Riesgos</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><?php echo $this->Html->link('Nuevo Análisis', array('controller' => 'Stages', 'action' => 'add')) ?></li>
                                <li><a href="#">Estatus</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-warning-sign"></span><p>Configuración</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><?php echo $this->Html->link('Tipos de trabajo', array('controller' => 'jobs', 'action' => 'index')) ?></li>
                                <li><?php echo $this->Html->link('Riesgos', array('controller' => 'risks', 'action' => 'index')) ?></li>
                                <li><?php echo $this->Html->link('Reglas de Seguridad', array('controller' => 'rules', 'action' => 'index')) ?></li>
                                <li><?php echo $this->Html->link('Áreas', array('controller' => 'areas', 'action' => 'index')) ?></li>
                                <li><?php echo $this->Html->link('Equipo de trabajo', array('controller' => 'gears', 'action' => 'index')) ?></li>
                                <li><?php echo $this->Html->link('Contratistas', array('controller' => 'contractors', 'action' => 'index')) ?></li>

                            </ul>
                        </li>

                        <?php elseif($current_user['role']): ?>
                            <li class="droplink"><a href="http://ptpsystem.net/Permissions/index" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-edit"></span><p>Permisos de Trabajo</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><?php echo $this->Html->link('Listar Permisos', array('controller' => 'Permissions', 'action' => 'index')) ?></li>
                                <li><?php echo $this->Html->link('Crear Permiso', array('controller' => 'Permissions', 'action' => 'add')) ?></li>
                                <li><a href="#">Estatus</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><span class="menu-icon glyphicon glyphicon-edit"></span><?php echo $this->Html->link('Contratistas', array('controller' => 'contractors', 'action' => 'index')) ?></li>

                        <li class="droplink"><a href="http://ptpsystem.net/Stages/index" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-edit"></span><p>Análisis de Riesgos</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><?php echo $this->Html->link('Nuevo Análisis', array('controller' => 'Stages', 'action' => 'add')) ?></li>
                                <li><a href="#">Estatus</a></li>
                            </ul>
                        </li>
                        <?php endif ?>
                        
                    
                        
                    </ul>
                </div><!-- Page Sidebar Inner -->
            </div><!-- Page Sidebar -->