<div class="page-title">
                    <h3>Reglas de trabajo</h3>
                </div>
                <div id="main-wrapper">
					<div class="panel panel-white">
                                <div class="panel-body">
                                	<?php echo $this->Html->link('Todas las reglas', array('controller' => 'rules', 'action' => 'index'), array("class" => 'btn btn-success m-b-sm')) ?>
                                	<?php echo $this->Html->link('Nueva Regla', array('controller' => 'rules', 'action' => 'add'), array("class" => 'btn btn-success m-b-sm')) ?>
                                    <div class="table-responsive">
                                        <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                            <thead>
	<tr>
			<th><?php echo __('id'); ?></th>
			<th><?php echo __('nombre'); ?></th>
			<th><?php echo __('job_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
                                            <tbody>
	
	<?php foreach ($rules as $rule): ?>
	<tr>
		<td><?php echo h($rule['Rule']['id']); ?>&nbsp;</td>
		<td><?php echo h($rule['Rule']['nombre']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($rule['Job']['nombre'], array('controller' => 'jobs', 'action' => 'view', $rule['Job']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $rule['Rule']['id']), array('class' => 'btn btn-sm btn-primary')); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $rule['Rule']['id']), array('class' => 'btn btn-sm btn-primary')); ?>
			<?php echo $this->Form->postLink('Eliminar', array('action' => 'delete', $rule['Rule']['id']), array('class' => 'btn btn-sm btn-primary'), array('Estas seguro que quieres eliminar el trabajo #', $rule['Rule']['id'])); ?>
			
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
                                            
                                        </table>
                                    </div>
                                </div>
                            </div>

				</div><!-- Main Wrapper -->
      