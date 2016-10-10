<div class="page-title">
  <h3>Permisos</h3>
</div>
<div id="main-wrapper">
  <div class="panel panel-white">
    <div class="panel-body">
      <?php echo $this->Html->link('nuevo análisis', array('controller' => 'stages', 'action' => 'add'), array("class" => 'btn btn-success m-b-sm')) ?>
      <div class="table-responsive">
        <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
          <thead>
            <tr>
              <th><?php echo __('#'); ?></th>
			<!-- <th><?php // echo __('frealizacion'); ?></th>
			<th><?php // echo __('firsup'); ?></th>
			<th><?php // echo __('firehs'); ?></th>
			<th><?php // echo __('firlid'); ?></th>
			<th><?php // echo __('activo'); ?></th>
			<th><?php // echo __('created'); ?></th>
			<th><?php // echo __('modified'); ?></th> -->
			<th><?php echo __('Contratista'); ?></th>
			<th><?php echo __('Lider de proyecto'); ?></th>
			<!-- <th><?php // echo __('supehs'); ?></th> -->
			<th><?php echo __('Supervisor'); ?></th>
			<!-- <th><?php // echo __('Trabajo a realizar'); ?></th> -->
			<th><?php echo __('Area'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($stages as $stage): ?>
            <tr>
              <td><?php echo h($stage['Stage']['id']); ?>&nbsp;</td>
		<!-- <td><?php // echo h($stage['Stage']['frealizacion']); ?>&nbsp;</td> -->
		<!-- <td><?php // echo h($stage['Stage']['firsup']); ?>&nbsp;</td>
		<td><?php // echo h($stage['Stage']['firehs']); ?>&nbsp;</td>
		<td><?php // echo h($stage['Stage']['firlid']); ?>&nbsp;</td>
		<td><?php // echo h($stage['Stage']['activo']); ?>&nbsp;</td>
		<td><?php // echo h($stage['Stage']['created']); ?>&nbsp;</td>
		<td><?php // echo h($stage['Stage']['modified']); ?>&nbsp;</td> -->
		<td>
			<?php echo $this->Html->link($stage['Contractor']['nombre'], array('controller' => 'contractors', 'action' => 'view', $stage['Contractor']['id'])); ?>
		</td>
		<td><?php echo h($stage['Stage']['supcontr']); ?>&nbsp;</td>
		<!-- <td><?php // echo h($stage['Stage']['supehs']); ?>&nbsp;</td> -->
		<td><?php echo h($stage['Stage']['supemp']); ?>&nbsp;</td>
		<!-- <td><?php // echo h($stage['Stage']['trareal']); ?>&nbsp;</td> -->
		<!-- <td><?php // echo h($stage['Stage']['descripcion']); ?>&nbsp;</td>
		<td><?php // echo h($stage['Stage']['notas']); ?>&nbsp;</td>
		<td><?php // echo h($stage['Stage']['ubicacion']); ?>&nbsp;</td>
		<td><?php // echo h($stage['Stage']['area']); ?>&nbsp;</td>
		<td><?php // echo h($stage['Stage']['fejecucion']); ?>&nbsp;</td> -->
		<td><?php echo h($stage['Stage']['area']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $stage['Stage']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $stage['Stage']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $stage['Stage']['id']), array(), __('Are you sure you want to delete # %s?', $stage['Stage']['id'])); ?>
		</td>
              
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
