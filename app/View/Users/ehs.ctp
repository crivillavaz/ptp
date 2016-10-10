<div class="page-title">
  <h3>Usuarios</h3>
</div>
<div id="main-wrapper">
  <div class="panel panel-white">
    <div class="panel-body">
      <?php echo $this->element('menu_usuario'); ?>
      <div class="table-responsive">
        <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
          <thead>
            <tr>
              <th><?php echo "#"; ?></th>
              <th><?php echo 'Nombre completo'; ?></th>
              <th><?php echo 'Usuario'; ?></th>
              <!-- <th><?php //echo 'role', 'Rol de usuario'; ?></th> -->
              <th><?php echo 'Email'; ?></th>
              <th><?php echo 'Teléfono'; ?></th>
              <!-- <th><?php // echo $this->Paginator->sort('contractor_id','Rol'); ?></th> -->
             <!--  <th><?php //echo $this->Paginator->sort('activo'); ?></th> -->
              <th class="actions"><?php echo __('Empresa'); ?></th>
              <th class="actions"><?php echo __('Acciones'); ?></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($seguridad as $ehs): ?>
            <tr>
              <td><?php echo h($ehs['User']['id']); ?>&nbsp;</td>
              <td><?php echo h($ehs['User']['fullname']); ?>&nbsp;</td>
              <td><?php echo h($ehs['User']['username']); ?>&nbsp;</td>
              <!-- <td><?php //echo h($ehs['User']['role']); ?>&nbsp;</td> -->
              <td><?php echo h($ehs['User']['email']); ?>&nbsp;</td>
              <td><?php echo h($ehs['User']['number']); ?>&nbsp;</td>
              <td><?php echo h($ehs['Contractor']['nombre']); ?>&nbsp;</td>
              <!-- <td><?php //echo h($ehs['User']['activo']); ?>&nbsp;</td> -->

              <td class="actions">
                <?php echo $this->Html->link(__('Ver'), array('action' => 'view', $ehs['User']['id']), array('class' => 'btn  btn-primary')); ?>
                <?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $ehs['User']['id']), array('class' => 'btn  btn-primary')); ?>
                <?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $ehs['User']['id']), array('class' => 'btn  btn-primary'), __('Estás seguro que quieres eliminar al  Usuario %s?', $ehs['User']['fullname'])); ?>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Main Wrapper -->