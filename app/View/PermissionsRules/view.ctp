<div class="permissionsRules view">
<h2><?php echo __('Permissions Rule'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($permissionsRule['PermissionsRule']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Permission Id'); ?></dt>
		<dd>
			<?php echo h($permissionsRule['PermissionsRule']['permission_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rule Id'); ?></dt>
		<dd>
			<?php echo h($permissionsRule['PermissionsRule']['rule_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Permissions Rule'), array('action' => 'edit', $permissionsRule['PermissionsRule']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Permissions Rule'), array('action' => 'delete', $permissionsRule['PermissionsRule']['id']), array(), __('Are you sure you want to delete # %s?', $permissionsRule['PermissionsRule']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Permissions Rules'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Permissions Rule'), array('action' => 'add')); ?> </li>
	</ul>
</div>
