<div class="usersCourses form">
<?php echo $this->Form->create('UsersCourse'); ?>
	<fieldset>
		<legend><?php echo __('Edit Users Course'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('course_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('UsersCourse.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('UsersCourse.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users Courses'), array('action' => 'index')); ?></li>
	</ul>
</div>
