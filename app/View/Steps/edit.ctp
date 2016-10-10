<div class="steps form">
<?php echo $this->Form->create('Step'); ?>
	<fieldset>
		<legend><?php echo __('Edit Step'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('herramientas');
		echo $this->Form->input('edofco');
		echo $this->Form->input('comentarios');
		echo $this->Form->input('risk_id');
		echo $this->Form->input('provocacion');
		echo $this->Form->input('cingenieria');
		echo $this->Form->input('cprocedimientos');
		echo $this->Form->input('cepp');
		echo $this->Form->input('job_id');
		echo $this->Form->input('stage_id');
		echo $this->Form->input('ccing');
		echo $this->Form->input('ccproc');
		echo $this->Form->input('provpor');
		echo $this->Form->input('Gear');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Step.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Step.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Steps'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Risks'), array('controller' => 'risks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Risk'), array('controller' => 'risks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stages'), array('controller' => 'stages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stage'), array('controller' => 'stages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Gears'), array('controller' => 'gears', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gear'), array('controller' => 'gears', 'action' => 'add')); ?> </li>
	</ul>
</div>
