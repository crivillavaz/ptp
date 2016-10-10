<div class="areas view">
<h2><?php echo __('Area'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($area['Area']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($area['Area']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($area['Area']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($area['Area']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Area'), array('action' => 'edit', $area['Area']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Area'), array('action' => 'delete', $area['Area']['id']), array(), __('Are you sure you want to delete # %s?', $area['Area']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Areas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Permissions'), array('controller' => 'permissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Permission'), array('controller' => 'permissions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Permissions'); ?></h3>
	<?php if (!empty($area['Permission'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Job Id'); ?></th>
		<th><?php echo __('Contractor Id'); ?></th>
		<th><?php echo __('Trabreal'); ?></th>
		<th><?php echo __('Supcontr'); ?></th>
		<th><?php echo __('Supemp'); ?></th>
		<th><?php echo __('Supare'); ?></th>
		<th><?php echo __('Area Id'); ?></th>
		<th><?php echo __('Ubicacion'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Notas'); ?></th>
		<th><?php echo __('Activo'); ?></th>
		<th><?php echo __('Firsup'); ?></th>
		<th><?php echo __('Firadm'); ?></th>
		<th><?php echo __('Firmlid'); ?></th>
		<th><?php echo __('Estatus'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($area['Permission'] as $permission): ?>
		<tr>
			<td><?php echo $permission['id']; ?></td>
			<td><?php echo $permission['job_id']; ?></td>
			<td><?php echo $permission['contractor_id']; ?></td>
			<td><?php echo $permission['trabreal']; ?></td>
			<td><?php echo $permission['supcontr']; ?></td>
			<td><?php echo $permission['supemp']; ?></td>
			<td><?php echo $permission['supare']; ?></td>
			<td><?php echo $permission['area_id']; ?></td>
			<td><?php echo $permission['ubicacion']; ?></td>
			<td><?php echo $permission['descripcion']; ?></td>
			<td><?php echo $permission['notas']; ?></td>
			<td><?php echo $permission['activo']; ?></td>
			<td><?php echo $permission['firsup']; ?></td>
			<td><?php echo $permission['firadm']; ?></td>
			<td><?php echo $permission['firmlid']; ?></td>
			<td><?php echo $permission['estatus']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'permissions', 'action' => 'view', $permission['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'permissions', 'action' => 'edit', $permission['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'permissions', 'action' => 'delete', $permission['id']), array(), __('Are you sure you want to delete # %s?', $permission['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Permission'), array('controller' => 'permissions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
