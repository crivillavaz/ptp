<div class="risksOptions view">
<h2><?php echo __('Risks Option'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($risksOption['RisksOption']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Risk Id'); ?></dt>
		<dd>
			<?php echo h($risksOption['RisksOption']['risk_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Option Id'); ?></dt>
		<dd>
			<?php echo h($risksOption['RisksOption']['option_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Risks Option'), array('action' => 'edit', $risksOption['RisksOption']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Risks Option'), array('action' => 'delete', $risksOption['RisksOption']['id']), array(), __('Are you sure you want to delete # %s?', $risksOption['RisksOption']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Risks Options'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Risks Option'), array('action' => 'add')); ?> </li>
	</ul>
</div>
