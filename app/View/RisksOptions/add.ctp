<div class="risksOptions form">
<?php echo $this->Form->create('RisksOption'); ?>
	<fieldset>
		<legend><?php echo __('Add Risks Option'); ?></legend>
	<?php
		echo $this->Form->input('risk_id');
		echo $this->Form->input('option_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Risks Options'), array('action' => 'index')); ?></li>
	</ul>
</div>
