<div class="stepsGears form">
<?php echo $this->Form->create('StepsGear'); ?>
	<fieldset>
		<legend><?php echo __('Edit Steps Gear'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('gear_id');
		echo $this->Form->input('step_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('StepsGear.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('StepsGear.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Steps Gears'), array('action' => 'index')); ?></li>
	</ul>
</div>
