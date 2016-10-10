<div class="usersCourses view">
<h2><?php echo __('Users Course'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($usersCourse['UsersCourse']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($usersCourse['UsersCourse']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Course Id'); ?></dt>
		<dd>
			<?php echo h($usersCourse['UsersCourse']['course_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Users Course'), array('action' => 'edit', $usersCourse['UsersCourse']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Users Course'), array('action' => 'delete', $usersCourse['UsersCourse']['id']), array(), __('Are you sure you want to delete # %s?', $usersCourse['UsersCourse']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users Courses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users Course'), array('action' => 'add')); ?> </li>
	</ul>
</div>
