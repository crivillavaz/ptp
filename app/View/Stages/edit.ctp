<div class="stages form">
<?php echo $this->Form->create('Stage'); ?>
	<fieldset>
		<legend><?php echo __('Edit Stage'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('frealizacion');
		echo $this->Form->input('firsup');
		echo $this->Form->input('firehs');
		echo $this->Form->input('firlid');
		echo $this->Form->input('activo');
		echo $this->Form->input('contractor_id');
		echo $this->Form->input('supcontr');
		echo $this->Form->input('supehs');
		echo $this->Form->input('supemp');
		echo $this->Form->input('trareal');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('notas');
		echo $this->Form->input('ubicacion');
		echo $this->Form->input('area_id');
		echo $this->Form->input('fejecucion');
		echo $this->Form->input('area');
		echo $this->Form->input('User');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Stage.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Stage.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Stages'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Contractors'), array('controller' => 'contractors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contractor'), array('controller' => 'contractors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Areas'), array('controller' => 'areas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area'), array('controller' => 'areas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Steps'), array('controller' => 'steps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Step'), array('controller' => 'steps', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
