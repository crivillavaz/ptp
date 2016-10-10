<div class="permissionsRules form">
<?php echo $this->Form->create('PermissionsRule'); ?>
	<fieldset>
		<legend><?php echo __('Add Permissions Rule'); ?></legend>
	<?php
		echo $this->Form->input('permission_id');
		echo $this->Form->input('rule_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Permissions Rules'), array('action' => 'index')); ?></li>
	</ul>
</div>
