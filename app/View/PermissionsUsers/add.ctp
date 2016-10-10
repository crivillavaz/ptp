<div class="permissionsUsers form">
<?php echo $this->Form->create('PermissionsUser'); ?>
	<fieldset>
		<legend><?php echo __('Add Permissions User'); ?></legend>
	<?php
		echo $this->Form->input('permission_id');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Permissions Users'), array('action' => 'index')); ?></li>
	</ul>
</div>
