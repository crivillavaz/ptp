<div class="permissionsRisks form">
<?php echo $this->Form->create('PermissionsRisk'); ?>
	<fieldset>
		<legend><?php echo __('Edit Permissions Risk'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('permission_id');
		echo $this->Form->input('risk_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PermissionsRisk.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('PermissionsRisk.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Permissions Risks'), array('action' => 'index')); ?></li>
	</ul>
</div>
