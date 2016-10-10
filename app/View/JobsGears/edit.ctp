<div class="jobsGears form">
<?php echo $this->Form->create('JobsGear'); ?>
	<fieldset>
		<legend><?php echo __('Edit Jobs Gear'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('job_id');
		echo $this->Form->input('gear_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('JobsGear.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('JobsGear.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Jobs Gears'), array('action' => 'index')); ?></li>
	</ul>
</div>
