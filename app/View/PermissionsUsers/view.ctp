<div class="permissionsUsers view">
<h2><?php echo __('Permissions User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($permissionsUser['PermissionsUser']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Permission Id'); ?></dt>
		<dd>
			<?php echo h($permissionsUser['PermissionsUser']['permission_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($permissionsUser['PermissionsUser']['user_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Permissions User'), array('action' => 'edit', $permissionsUser['PermissionsUser']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Permissions User'), array('action' => 'delete', $permissionsUser['PermissionsUser']['id']), array(), __('Are you sure you want to delete # %s?', $permissionsUser['PermissionsUser']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Permissions Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Permissions User'), array('action' => 'add')); ?> </li>
	</ul>
</div>
