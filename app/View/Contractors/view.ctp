<div class="contractors view">
<h2><?php echo __('Contractor'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contractor['Contractor']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($contractor['Contractor']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Giro'); ?></dt>
		<dd>
			<?php echo h($contractor['Contractor']['giro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rfc'); ?></dt>
		<dd>
			<?php echo h($contractor['Contractor']['rfc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Regpat'); ?></dt>
		<dd>
			<?php echo h($contractor['Contractor']['regpat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activo'); ?></dt>
		<dd>
			<?php echo h($contractor['Contractor']['activo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($contractor['Contractor']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($contractor['Contractor']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Contractor'), array('action' => 'edit', $contractor['Contractor']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Contractor'), array('action' => 'delete', $contractor['Contractor']['id']), array(), __('Are you sure you want to delete # %s?', $contractor['Contractor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Contractors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contractor'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Permissions'), array('controller' => 'permissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Permission'), array('controller' => 'permissions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stages'), array('controller' => 'stages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stage'), array('controller' => 'stages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Permissions'); ?></h3>
	<?php if (!empty($contractor['Permission'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Job Id'); ?></th>
		<th><?php echo __('Contractor Id'); ?></th>
		<th><?php echo __('Trabreal'); ?></th>
		<th><?php echo __('Supare'); ?></th>
		<th><?php echo __('Area Id'); ?></th>
		<th><?php echo __('Ubicacion'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Notas'); ?></th>
		<th><?php echo __('Activo'); ?></th>
		<th><?php echo __('Supemp'); ?></th>
		<th><?php echo __('Supcontr'); ?></th>
		<th><?php echo __('Firsup'); ?></th>
		<th><?php echo __('Firadm'); ?></th>
		<th><?php echo __('Firmlid'); ?></th>
		<th><?php echo __('Estatus'); ?></th>
		<th><?php echo __('Firmehs'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Finicio'); ?></th>
		<th><?php echo __('Fin'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($contractor['Permission'] as $permission): ?>
		<tr>
			<td><?php echo $permission['id']; ?></td>
			<td><?php echo $permission['job_id']; ?></td>
			<td><?php echo $permission['contractor_id']; ?></td>
			<td><?php echo $permission['trabreal']; ?></td>
			<td><?php echo $permission['supare']; ?></td>
			<td><?php echo $permission['area_id']; ?></td>
			<td><?php echo $permission['ubicacion']; ?></td>
			<td><?php echo $permission['descripcion']; ?></td>
			<td><?php echo $permission['notas']; ?></td>
			<td><?php echo $permission['activo']; ?></td>
			<td><?php echo $permission['supemp']; ?></td>
			<td><?php echo $permission['supcontr']; ?></td>
			<td><?php echo $permission['firsup']; ?></td>
			<td><?php echo $permission['firadm']; ?></td>
			<td><?php echo $permission['firmlid']; ?></td>
			<td><?php echo $permission['estatus']; ?></td>
			<td><?php echo $permission['firmehs']; ?></td>
			<td><?php echo $permission['created']; ?></td>
			<td><?php echo $permission['modified']; ?></td>
			<td><?php echo $permission['finicio']; ?></td>
			<td><?php echo $permission['fin']; ?></td>
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
<div class="related">
	<h3><?php echo __('Related Stages'); ?></h3>
	<?php if (!empty($contractor['Stage'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Frealizacion'); ?></th>
		<th><?php echo __('Firsup'); ?></th>
		<th><?php echo __('Firehs'); ?></th>
		<th><?php echo __('Firlid'); ?></th>
		<th><?php echo __('Activo'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Contractor Id'); ?></th>
		<th><?php echo __('Supcontr'); ?></th>
		<th><?php echo __('Supehs'); ?></th>
		<th><?php echo __('Supemp'); ?></th>
		<th><?php echo __('Trareal'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Notas'); ?></th>
		<th><?php echo __('Ubicacion'); ?></th>
		<th><?php echo __('Area Id'); ?></th>
		<th><?php echo __('Fejecucion'); ?></th>
		<th><?php echo __('Area'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($contractor['Stage'] as $stage): ?>
		<tr>
			<td><?php echo $stage['id']; ?></td>
			<td><?php echo $stage['frealizacion']; ?></td>
			<td><?php echo $stage['firsup']; ?></td>
			<td><?php echo $stage['firehs']; ?></td>
			<td><?php echo $stage['firlid']; ?></td>
			<td><?php echo $stage['activo']; ?></td>
			<td><?php echo $stage['created']; ?></td>
			<td><?php echo $stage['modified']; ?></td>
			<td><?php echo $stage['contractor_id']; ?></td>
			<td><?php echo $stage['supcontr']; ?></td>
			<td><?php echo $stage['supehs']; ?></td>
			<td><?php echo $stage['supemp']; ?></td>
			<td><?php echo $stage['trareal']; ?></td>
			<td><?php echo $stage['descripcion']; ?></td>
			<td><?php echo $stage['notas']; ?></td>
			<td><?php echo $stage['ubicacion']; ?></td>
			<td><?php echo $stage['area_id']; ?></td>
			<td><?php echo $stage['fejecucion']; ?></td>
			<td><?php echo $stage['area']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'stages', 'action' => 'view', $stage['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'stages', 'action' => 'edit', $stage['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'stages', 'action' => 'delete', $stage['id']), array(), __('Are you sure you want to delete # %s?', $stage['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Stage'), array('controller' => 'stages', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($contractor['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fullname'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Number'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Role'); ?></th>
		<th><?php echo __('Activo'); ?></th>
		<th><?php echo __('Contractor Id'); ?></th>
		<th><?php echo __('Imss'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($contractor['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['fullname']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['email']; ?></td>
			<td><?php echo $user['number']; ?></td>
			<td><?php echo $user['created']; ?></td>
			<td><?php echo $user['modified']; ?></td>
			<td><?php echo $user['role']; ?></td>
			<td><?php echo $user['activo']; ?></td>
			<td><?php echo $user['contractor_id']; ?></td>
			<td><?php echo $user['imss']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), array(), __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
