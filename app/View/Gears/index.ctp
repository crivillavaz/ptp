<div class="page-title">
                    <h3>Equipo de Trabajo peligroso</h3>
                </div>
                <div id="main-wrapper">
					<div class="panel panel-white">
                                <div class="panel-body">
                                	<?php echo $this->Html->link('Todos los EPP', array('controller' => 'gears', 'action' => 'index'), array("class" => 'btn btn-success m-b-sm')) ?>
                                	<?php echo $this->Html->link('Nuevo  EPP', array('controller' => 'gears', 'action' => 'add'), array("class" => 'btn btn-success m-b-sm')) ?>
                                    <div class="table-responsive">
                                        <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                            <thead>
	<tr>
			<th><?php echo __('id'); ?></th>
			<th><?php echo __('nombre'); ?></th>
			<th><?php echo __('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
                                            <tbody>
	
	<?php foreach ($gears as $gear): ?>
	<tr>
		<td><?php echo h($gear['Gear']['id']); ?>&nbsp;</td>
		<td><?php echo h($gear['Gear']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($gear['Gear']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $gear['Gear']['id']), array('class' => 'btn btn-sm btn-primary')); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $gear['Gear']['id']), array('class' => 'btn btn-sm btn-primary')); ?>
			<?php echo $this->Form->postLink('Eliminar', array('action' => 'delete', $gear['Gear']['id']), array('class' => 'btn btn-sm btn-primary'), array('Estas seguro que quieres eliminar el trabajo #', $gear['Gear']['id'])); ?>
			
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
                                            
                                        </table>
                                    </div>
                                </div>
                            </div>

				</div><!-- Main Wrapper -->
      