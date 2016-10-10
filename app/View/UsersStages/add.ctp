<div class="usersStages form">
<?php echo $this->Form->create('UsersStage'); ?>
	<fieldset>
		<legend><?php echo __('Add Users Stage'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('stage_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users Stages'), array('action' => 'index')); ?></li>
	</ul>
</div>
