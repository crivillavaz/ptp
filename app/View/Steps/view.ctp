<div class="steps view">
<h2><?php echo __('Step'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($step['Step']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($step['Step']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Herramientas'); ?></dt>
		<dd>
			<?php echo h($step['Step']['herramientas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edofco'); ?></dt>
		<dd>
			<?php echo h($step['Step']['edofco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comentarios'); ?></dt>
		<dd>
			<?php echo h($step['Step']['comentarios']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Risk'); ?></dt>
		<dd>
			<?php echo $this->Html->link($step['Risk']['nombre'], array('controller' => 'risks', 'action' => 'view', $step['Risk']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Provocacion'); ?></dt>
		<dd>
			<?php echo h($step['Step']['provocacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cingenieria'); ?></dt>
		<dd>
			<?php echo h($step['Step']['cingenieria']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cprocedimientos'); ?></dt>
		<dd>
			<?php echo h($step['Step']['cprocedimientos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cepp'); ?></dt>
		<dd>
			<?php echo h($step['Step']['cepp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job'); ?></dt>
		<dd>
			<?php echo $this->Html->link($step['Job']['nombre'], array('controller' => 'jobs', 'action' => 'view', $step['Job']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stage'); ?></dt>
		<dd>
			<?php echo $this->Html->link($step['Stage']['frealizacion'], array('controller' => 'stages', 'action' => 'view', $step['Stage']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ccing'); ?></dt>
		<dd>
			<?php echo h($step['Step']['ccing']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ccproc'); ?></dt>
		<dd>
			<?php echo h($step['Step']['ccproc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Provpor'); ?></dt>
		<dd>
			<?php echo h($step['Step']['provpor']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Step'), array('action' => 'edit', $step['Step']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Step'), array('action' => 'delete', $step['Step']['id']), array(), __('Are you sure you want to delete # %s?', $step['Step']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Steps'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Step'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Gears'); ?></h3>
	<?php if (!empty($step['Gear'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($step['Gear'] as $gear): ?>
		<tr>
			<td><?php echo $gear['id']; ?></td>
			<td><?php echo $gear['nombre']; ?></td>
			<td><?php echo $gear['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'gears', 'action' => 'view', $gear['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'gears', 'action' => 'edit', $gear['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'gears', 'action' => 'delete', $gear['id']), array(), __('Are you sure you want to delete # %s?', $gear['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Gear'), array('controller' => 'gears', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
