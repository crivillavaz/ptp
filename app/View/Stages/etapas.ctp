	<div class="table-responsive">
	<table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
	<thead>
	<tr>
			
			<th><?php echo __('Etapa'); ?></th>
			<th><?php echo __('Herramientas'); ?></th>
			<th><?php echo __('Estado Físico'); ?></th>
			
			<th><?php echo __('Riesgo'); ?></th>
			<th><?php echo __('Provocado por'); ?></th>
			<!-- <th class="actions"><?php // echo __('Actions'); ?></th> -->
	</tr>
	</thead>
	<tbody>
	<?php foreach ($steps as $step): ?>
	<tr>
		
		<td><?php echo h($step['Step']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($step['Step']['herramientas']); ?>&nbsp;</td>
		<td><?php echo h($step['Step']['edofco']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($step['Risk']['nombre'], array('controller' => 'risks', 'action' => 'view', $step['Risk']['id'])); ?>
		</td>
		<td><?php echo h($step['Step']['provocacion']); ?>&nbsp;</td>
		<!-- <td class="actions">
			<?php //echo $this->Html->link(__('View'), array('controller' => 'steps', 'action' => 'view', $step['Step']['id'])); ?>
			<?php //echo $this->Html->link(__('Edit'), array('controller' => 'steps', 'action' => 'edit', $step['Step']['id'])); ?>
			<?php //echo $this->Form->postLink(__('Delete'), array('controller' => 'steps', 'action' => 'delete', $step['Step']['id']), array(), __('Are you sure you want to delete # %s?', $step['Step']['id'])); ?>
		</td> -->
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>
<ul class="pager wizard">
                <li class="previous"><a href="#" class="btn btn-default">Anterior</a></li>
                <li class="next" ><a href="#" class="btn btn-default">Siguiente</a></li>

              </ul>