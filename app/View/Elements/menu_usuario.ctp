<?php echo $this->Html->link('Nuevo Usuario', array('controller' => 'users', 'action' => 'add'), array("class" => 'btn btn-info m-b-sm')) ?>
     <?php echo $this->Html->link('Todos', array('controller' => 'users', 'action' => 'index'), array("class" => 'btn btn-success m-b-sm')) ?>
     <?php echo $this->Html->link('Administradores', array('controller' => 'users', 'action' => 'administradores'), array("class" => 'btn btn-success m-b-sm')) ?>
      <?php echo $this->Html->link('Trabajadores', array('controller' => 'users', 'action' => 'trabajadores'), array("class" => 'btn btn-success m-b-sm')) ?>
      <?php echo $this->Html->link('Supervisores', array('controller' => 'users', 'action' => 'supervisores'), array("class" => 'btn btn-success m-b-sm')) ?>
      <?php echo $this->Html->link('Líderes de Proyecto', array('controller' => 'users', 'action' => 'lideres'), array("class" => 'btn btn-success m-b-sm')) ?>
      <?php echo $this->Html->link('Vigilantes', array('controller' => 'users', 'action' => 'vigilantes'), array("class" => 'btn btn-success m-b-sm')) ?>
      <?php echo $this->Html->link('EHS', array('controller' => 'users', 'action' => 'ehs'), array("class" => 'btn btn-success m-b-sm')) ?>