<div class="permissionsRules form">
<?php echo $this->Form->create('PermissionsRule'); ?>
	<fieldset>
		<legend><?php echo __('Edit Permissions Rule'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('permission_id');
		echo $this->Form->input('rule_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PermissionsRule.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('PermissionsRule.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Permissions Rules'), array('action' => 'index')); ?></li>
	</ul>
</div>
