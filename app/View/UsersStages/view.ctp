<div class="usersStages view">
<h2><?php echo __('Users Stage'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($usersStage['UsersStage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($usersStage['UsersStage']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stage Id'); ?></dt>
		<dd>
			<?php echo h($usersStage['UsersStage']['stage_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Users Stage'), array('action' => 'edit', $usersStage['UsersStage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Users Stage'), array('action' => 'delete', $usersStage['UsersStage']['id']), array(), __('Are you sure you want to delete # %s?', $usersStage['UsersStage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users Stages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users Stage'), array('action' => 'add')); ?> </li>
	</ul>
</div>
