<div class="permissionsRisks view">
<h2><?php echo __('Permissions Risk'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($permissionsRisk['PermissionsRisk']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Permission Id'); ?></dt>
		<dd>
			<?php echo h($permissionsRisk['PermissionsRisk']['permission_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Risk Id'); ?></dt>
		<dd>
			<?php echo h($permissionsRisk['PermissionsRisk']['risk_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Permissions Risk'), array('action' => 'edit', $permissionsRisk['PermissionsRisk']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Permissions Risk'), array('action' => 'delete', $permissionsRisk['PermissionsRisk']['id']), array(), __('Are you sure you want to delete # %s?', $permissionsRisk['PermissionsRisk']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Permissions Risks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Permissions Risk'), array('action' => 'add')); ?> </li>
	</ul>
</div>
