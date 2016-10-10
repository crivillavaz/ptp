<div class="page-title">
                    <h3>Riesgos de trabajo</h3>
                </div>
                <div id="main-wrapper">
					<div class="panel panel-white">
                                <div class="panel-body">
                                	<?php echo $this->Html->link('Todos los riesgos', array('controller' => 'risks', 'action' => 'index'), array("class" => 'btn btn-success m-b-sm')) ?>
                                    <?php echo $this->Html->link('nuevo riesgo', array('controller' => 'risks', 'action' => 'add'), array("class" => 'btn btn-success m-b-sm')) ?>
                                    <?php echo $this->Html->link('nuevo tipo de riesgo', array('controller' => 'options', 'action' => 'add'), array("class" => 'btn btn-success m-b-sm')) ?>
                                    <div class="table-responsive">
                                        <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                            <thead>
	<tr>
			<th><?php echo __('id'); ?></th>
			<th><?php echo __('nombre'); ?></th>
			<th><?php echo __('created'); ?></th>
			<th><?php echo __('modified'); ?></th>
			<th><?php echo __('job_id'); ?></th>
			<th>Acciones</th>
	</tr>
	</thead>
                                            <tbody>
	<?php foreach ($risks as $risk): ?>
	<tr>
		<td><?php echo h($risk['Risk']['id']); ?>&nbsp;</td>
		<td><?php echo h($risk['Risk']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($risk['Risk']['created']); ?>&nbsp;</td>
		<td><?php echo h($risk['Risk']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($risk['Job']['nombre'], array('controller' => 'jobs', 'action' => 'view', $risk['Job']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $risk['Risk']['id']), array('class' => 'btn btn-sm btn-primary')); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $risk['Risk']['id']), array('class' => 'btn btn-sm btn-primary')); ?>
			<?php echo $this->Form->postLink('Eliminar', array('action' => 'delete', $risk['Risk']['id']), array('class' => 'btn btn-sm btn-primary'), array('Estas seguro que quieres eliminar el trabajo #', $risk['Risk']['id'])); ?>
			
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
                                            
                                        </table>
                                    </div>
                                </div>
                            </div>

				</div><!-- Main Wrapper -->
        
