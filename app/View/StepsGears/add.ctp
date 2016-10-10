<div class="stepsGears form">
<?php echo $this->Form->create('StepsGear'); ?>
	<fieldset>
		<legend><?php echo __('Add Steps Gear'); ?></legend>
	<?php
		echo $this->Form->input('gear_id');
		echo $this->Form->input('step_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Steps Gears'), array('action' => 'index')); ?></li>
	</ul>
</div>
