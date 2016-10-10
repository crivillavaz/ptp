<div class="gears view">
<h2><?php echo __('Gear'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($gear['Gear']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($gear['Gear']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($gear['Gear']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Gear'), array('action' => 'edit', $gear['Gear']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Gear'), array('action' => 'delete', $gear['Gear']['id']), array(), __('Are you sure you want to delete # %s?', $gear['Gear']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Gears'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gear'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Steps'), array('controller' => 'steps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Step'), array('controller' => 'steps', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Jobs'); ?></h3>
	<?php if (!empty($gear['Job'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($gear['Job'] as $job): ?>
		<tr>
			<td><?php echo $job['id']; ?></td>
			<td><?php echo $job['nombre']; ?></td>
			<td><?php echo $job['created']; ?></td>
			<td><?php echo $job['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'jobs', 'action' => 'view', $job['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'jobs', 'action' => 'edit', $job['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'jobs', 'action' => 'delete', $job['id']), array(), __('Are you sure you want to delete # %s?', $job['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Steps'); ?></h3>
	<?php if (!empty($gear['Step'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Herramientas'); ?></th>
		<th><?php echo __('Edofco'); ?></th>
		<th><?php echo __('Comentarios'); ?></th>
		<th><?php echo __('Risk Id'); ?></th>
		<th><?php echo __('Provocacion'); ?></th>
		<th><?php echo __('Cingenieria'); ?></th>
		<th><?php echo __('Cprocedimientos'); ?></th>
		<th><?php echo __('Cepp'); ?></th>
		<th><?php echo __('Job Id'); ?></th>
		<th><?php echo __('Stage Id'); ?></th>
		<th><?php echo __('Ccing'); ?></th>
		<th><?php echo __('Ccproc'); ?></th>
		<th><?php echo __('Provpor'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($gear['Step'] as $step): ?>
		<tr>
			<td><?php echo $step['id']; ?></td>
			<td><?php echo $step['nombre']; ?></td>
			<td><?php echo $step['herramientas']; ?></td>
			<td><?php echo $step['edofco']; ?></td>
			<td><?php echo $step['comentarios']; ?></td>
			<td><?php echo $step['risk_id']; ?></td>
			<td><?php echo $step['provocacion']; ?></td>
			<td><?php echo $step['cingenieria']; ?></td>
			<td><?php echo $step['cprocedimientos']; ?></td>
			<td><?php echo $step['cepp']; ?></td>
			<td><?php echo $step['job_id']; ?></td>
			<td><?php echo $step['stage_id']; ?></td>
			<td><?php echo $step['ccing']; ?></td>
			<td><?php echo $step['ccproc']; ?></td>
			<td><?php echo $step['provpor']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'steps', 'action' => 'view', $step['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'steps', 'action' => 'edit', $step['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'steps', 'action' => 'delete', $step['id']), array(), __('Are you sure you want to delete # %s?', $step['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Step'), array('controller' => 'steps', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
