<div class="stepsGears view">
<h2><?php echo __('Steps Gear'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($stepsGear['StepsGear']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gear Id'); ?></dt>
		<dd>
			<?php echo h($stepsGear['StepsGear']['gear_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Step Id'); ?></dt>
		<dd>
			<?php echo h($stepsGear['StepsGear']['step_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Steps Gear'), array('action' => 'edit', $stepsGear['StepsGear']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Steps Gear'), array('action' => 'delete', $stepsGear['StepsGear']['id']), array(), __('Are you sure you want to delete # %s?', $stepsGear['StepsGear']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Steps Gears'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Steps Gear'), array('action' => 'add')); ?> </li>
	</ul>
</div>
