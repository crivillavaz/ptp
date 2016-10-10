<div class="page-title">
                    <h3>Trabajos Peligrosos</h3>
                </div>
                <div id="main-wrapper">
					<div class="panel panel-white">
                                <div class="panel-body">
                                    <?php echo $this->Html->link('nuevo', array('controller' => 'jobs', 'action' => 'add'), array("class" => 'btn btn-success m-b-sm')) ?>
                                    <div class="table-responsive">
                                        <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                            <thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', "#"); ?></th>
			<th><?php echo $this->Paginator->sort('nombre', 'Tipo de trabajo'); ?></th>
			<th>Acciones</th>
	</tr>
	</thead>
                                            <tbody>
	<?php foreach ($jobs as $job): ?>
	<tr>
		<td><?php echo h($job['Job']['id']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['nombre']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $job['Job']['id']), array('class' => 'btn btn-sm btn-primary')); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $job['Job']['id']), array('class' => 'btn btn-sm btn-primary')); ?>
			<?php echo $this->Form->postLink('Eliminar', array('action' => 'delete', $job['Job']['id']), array('class' => 'btn btn-sm btn-primary'), array('Estas seguro que quieres eliminar el trabajo #', $job['Job']['id'])); ?>
			
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
                                            
                                        </table>
                                    </div>
                                </div>
                            </div>

				</div><!-- Main Wrapper -->
        