<div class="steps index">
	<h2><?php echo __('Steps'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('herramientas'); ?></th>
			<th><?php echo $this->Paginator->sort('edofco'); ?></th>
			<th><?php echo $this->Paginator->sort('comentarios'); ?></th>
			<th><?php echo $this->Paginator->sort('risk_id'); ?></th>
			<th><?php echo $this->Paginator->sort('provocacion'); ?></th>
			<th><?php echo $this->Paginator->sort('cingenieria'); ?></th>
			<th><?php echo $this->Paginator->sort('cprocedimientos'); ?></th>
			<th><?php echo $this->Paginator->sort('cepp'); ?></th>
			<th><?php echo $this->Paginator->sort('job_id'); ?></th>
			<th><?php echo $this->Paginator->sort('stage_id'); ?></th>
			<th><?php echo $this->Paginator->sort('ccing'); ?></th>
			<th><?php echo $this->Paginator->sort('ccproc'); ?></th>
			<th><?php echo $this->Paginator->sort('provpor'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($steps as $step): ?>
	<tr>
		<td><?php echo h($step['Step']['id']); ?>&nbsp;</td>
		<td><?php echo h($step['Step']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($step['Step']['herramientas']); ?>&nbsp;</td>
		<td><?php echo h($step['Step']['edofco']); ?>&nbsp;</td>
		<td><?php echo h($step['Step']['comentarios']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($step['Risk']['nombre'], array('controller' => 'risks', 'action' => 'view', $step['Risk']['id'])); ?>
		</td>
		<td><?php echo h($step['Step']['provocacion']); ?>&nbsp;</td>
		<td><?php echo h($step['Step']['cingenieria']); ?>&nbsp;</td>
		<td><?php echo h($step['Step']['cprocedimientos']); ?>&nbsp;</td>
		<td><?php echo h($step['Step']['cepp']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($step['Job']['nombre'], array('controller' => 'jobs', 'action' => 'view', $step['Job']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($step['Stage']['frealizacion'], array('controller' => 'stages', 'action' => 'view', $step['Stage']['id'])); ?>
		</td>
		<td><?php echo h($step['Step']['ccing']); ?>&nbsp;</td>
		<td><?php echo h($step['Step']['ccproc']); ?>&nbsp;</td>
		<td><?php echo h($step['Step']['provpor']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $step['Step']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $step['Step']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $step['Step']['id']), array(), __('Are you sure you want to delete # %s?', $step['Step']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Step'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Risks'), array('controller' => 'risks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Risk'), array('controller' => 'risks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stages'), array('controller' => 'stages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stage'), array('controller' => 'stages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Gears'), array('controller' => 'gears', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gear'), array('controller' => 'gears', 'action' => 'add')); ?> </li>
	</ul>
</div>
