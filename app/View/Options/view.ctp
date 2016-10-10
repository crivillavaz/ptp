<div class="options view">
<h2><?php echo __('Option'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($option['Option']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Opcion'); ?></dt>
		<dd>
			<?php echo h($option['Option']['opcion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Option'), array('action' => 'edit', $option['Option']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Option'), array('action' => 'delete', $option['Option']['id']), array(), __('Are you sure you want to delete # %s?', $option['Option']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Options'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Option'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Risks'), array('controller' => 'risks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Risk'), array('controller' => 'risks', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Risks'); ?></h3>
	<?php if (!empty($option['Risk'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Job Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($option['Risk'] as $risk): ?>
		<tr>
			<td><?php echo $risk['id']; ?></td>
			<td><?php echo $risk['nombre']; ?></td>
			<td><?php echo $risk['created']; ?></td>
			<td><?php echo $risk['modified']; ?></td>
			<td><?php echo $risk['job_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'risks', 'action' => 'view', $risk['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'risks', 'action' => 'edit', $risk['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'risks', 'action' => 'delete', $risk['id']), array(), __('Are you sure you want to delete # %s?', $risk['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Risk'), array('controller' => 'risks', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
