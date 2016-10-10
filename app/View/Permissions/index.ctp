<div class="page-title">
  <h3>Permisos</h3>
</div>
<div id="main-wrapper">
  <div class="panel panel-white">
    <div class="panel-body">
      <?php echo $this->Html->link('nuevo permiso', array('controller' => 'permissions', 'action' => 'add'), array("class" => 'btn btn-success m-b-sm')) ?>
      <div class="table-responsive">
        <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
          <thead>
            <tr>
              <th><?php echo $this->Paginator->sort('id', '#'); ?></th>
              <th><?php echo $this->Paginator->sort('job_id', 'Permiso para'); ?></th>
              <th><?php echo $this->Paginator->sort('contractor_id', 'Empresa Contratista'); ?></th>
              <th><?php echo $this->Paginator->sort('trabreal', 'Trabajo a realizar'); ?></th>
              <!--  -->
              <th><?php echo $this->Paginator->sort('area_id', 'Área'); ?></th>
              <!-- <th><?php // echo $this->Paginator->sort('estatus'); ?></th> -->
              <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($permissions as $permission): ?>
            <tr>
              <td><?php echo $permission['Permission']['id'] ?>&nbsp;</td>
              <td>
                <?php echo $permission['Job']['nombre']?>
              </td>
              <td>
                <?php echo $permission['Contractor']['nombre'] ?>
              </td>
              <td><?php echo h($permission['Permission']['trabreal']); ?>&nbsp;</td>
              <td>
                <?php echo $permission['Area']['nombre'] ?>
              </td>
              <td><?php echo $this->Html->link('Ver', array('controller' => 'permissions', 'action' => 'view', $permission['Permission']['id']), array('class' => 'btn btn-info')); ?>&nbsp;<?php echo $this->Html->link('Editar', array('controller' => 'permissions', 'action' => 'edit', $permission['Permission']['id']), array('class' => 'btn btn-info')); ?>&nbsp;<?php echo $this->Html->link(__('Imprimir'), array('action' => 'view', $permission['Permission']['id'], 'ext' => 'pdf'), array('class' => 'btn btn-info')); ?>
                <?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $permission['Permission']['id']), array('class' => 'btn  btn-danger'), __('Estás seguro que quieres eliminar el permiso %s?', $permission['Permission']['id'])); ?>
                
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
