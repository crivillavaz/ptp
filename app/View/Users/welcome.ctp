<!-- <div class="page-title">
  <h3>Bienvenido a tu panel </h3>
  </div> -->
<div id="main-wrapper">
  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-white">
        <div class="panel panel-white">
          <div class="panel-body">
            <div class="profile-cover">
              <div class="row">
                <div class="col-md-3 profile-image">
                  <div class="profile-image-container">
                    <img  class="perfil" src="http://ptpsystem.net/assets/images/profile-picture.png" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div id="main-wrapper">
              <div class="row">
                <div class="col-md-12 user-profile">
                  <h3 class="text-center"><?php echo $current_user['fullname'] ?></h3>
                  <p class="text-center"><?php echo $current_user['role'] ?></p>
                  <hr>
                  <ul class="list-unstyled text-center">
                    <li>
                      <p><i class="fa fa-envelope m-r-xs"></i><a href="mailto:<?php echo $current_user['email'] ?>"><?php echo $current_user['email'] ?></a></p>
                    </li>
                    <li>
                      <p><i class="fa fa-link m-r-xs"></i><?php echo $current_user['number'] ?>
                    </li>
                  </ul>
                  <hr>
                  <?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $current_user['id']), array('class' => 'btn  btn-danger btn-block')); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="panel panel-white">
        <div class="panel-body">
          <h1 >Bienvenido </h1>
          <br>
          <p>El sistema PTP te da la bienvenida a tu panel y te agradece tu preferencia. En este lugar podrás generar Permismos de Trabajo Peligrosos así como Análisis de Riesgo.</p>
          <p>Puedes tambier llevar la administración de los usuarios registrados, compañías contratistas, areas de trabajo, cursos DC3 y más.</p>
          <?php echo $this->Html->link('<i class="fa fa-plus"></i> Generar un nuevo permiso', array('controller' => 'permissions', 'action' => 'add'), array('class' => 'btn btn-primary btn-addon m-b-sm', 'escape' => false)); ?>&nbsp;<?php echo $this->Html->link('<i class="fa fa-plus"></i> Nuevo Análisis de riesgos', array('controller' => 'Stages', 'action' => 'add'), array('class' => 'btn btn-primary btn-addon m-b-sm', 'escape' => false)); ?>
        </div>
      </div>
      <div class="col-md-6">
        <div class="panel panel-white">
          <div class="panel-body">
            <h2>Últimos permisos generados</h2>
            <br>
            <div class="table-responsive">
              <table  class="display table" style="width: 100%; cellspacing: 0;">
                <thead>
                  <tr>
                    <th><?php echo __('Permiso'); ?></th>
                    <th><?php echo __('Empresa'); ?></th>
                    <th><?php echo __('Trabajo'); ?></th>
                    <!-- <th><?php // echo __('estatus'); ?></th> -->
                    <th class="actions"><?php echo __('Actions'); ?></th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($permissions as $permission): ?>
                  <tr>
                    <td>
                      <?php echo $permission['Job']['nombre']?>
                    </td>
                    <td>
                      <?php echo $permission['Contractor']['nombre'] ?>
                    </td>
                    <td><?php echo h($permission['Permission']['trabreal']); ?>&nbsp;</td>
                    <td><?php echo $this->Html->link('Ver', array('controller' => 'permissions', 'action' => 'view', $permission['Permission']['id']), array('class' => 'btn btn-info')); ?>&nbsp;
                    </td>
                    <!-- <td><span class="label label-success">Termninado</span></td> -->
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="panel panel-white">
          <div class="panel-body">
            <h2>Últimos análisis realizados</h2>
            <br>
            <table class="display table" style="width: 100%; cellspacing: 0;">
              <thead>
                <tr>
                  <th><?php echo __('Fecha'); ?></th>
                  <th><?php echo __('Empresa'); ?></th>
                  <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($stages as $stage): ?>
                <tr>
                  <td><?php echo h($stage['Stage']['frealizacion']); ?>&nbsp;</td>
                  <td>
                    <?php echo $this->Html->link($stage['Contractor']['nombre'], array('controller' => 'contractors', 'action' => 'view', $stage['Contractor']['id'])); ?>
                  <td><?php echo h($stage['Stage']['trareal']); ?>&nbsp;</td>
                  <td class="actions">
                    <?php echo $this->Html->link(__('Ver'), array('controller' => 'stages', 'action' => 'view', $stage['Stage']['id']), array('class' => 'btn btn-success')); ?>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>