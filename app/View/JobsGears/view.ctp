<div class="jobsGears view">
<h2><?php echo __('Jobs Gear'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($jobsGear['JobsGear']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job Id'); ?></dt>
		<dd>
			<?php echo h($jobsGear['JobsGear']['job_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gear Id'); ?></dt>
		<dd>
			<?php echo h($jobsGear['JobsGear']['gear_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Jobs Gear'), array('action' => 'edit', $jobsGear['JobsGear']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Jobs Gear'), array('action' => 'delete', $jobsGear['JobsGear']['id']), array(), __('Are you sure you want to delete # %s?', $jobsGear['JobsGear']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs Gears'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobs Gear'), array('action' => 'add')); ?> </li>
	</ul>
</div>
