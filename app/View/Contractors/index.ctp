<div class="page-title">
                    <h3>Contratistas</h3>
                </div>
                <div id="main-wrapper">
					<div class="panel panel-white">
                                <div class="panel-body">
                                	<?php echo $this->Html->link('Todos los contratistas', array('controller' => 'contractors', 'action' => 'index'), array("class" => 'btn btn-success m-b-sm')) ?>
                                    <?php echo $this->Html->link('Nueva empresa contratista', array('controller' => 'contractors', 'action' => 'add'), array("class" => 'btn btn-success m-b-sm')) ?>

                                    <div class="table-responsive">
                                        
                                        	<table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('giro'); ?></th>
			<th><?php echo $this->Paginator->sort('rfc'); ?></th>
			<th><?php echo $this->Paginator->sort('regpat'); ?></th>
			<th><?php echo $this->Paginator->sort('activo'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($contractors as $contractor): ?>
	<tr>
		<td><?php echo h($contractor['Contractor']['id']); ?>&nbsp;</td>
		<td><?php echo h($contractor['Contractor']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($contractor['Contractor']['giro']); ?>&nbsp;</td>
		<td><?php echo h($contractor['Contractor']['rfc']); ?>&nbsp;</td>
		<td><?php echo h($contractor['Contractor']['regpat']); ?>&nbsp;</td>
		<td><?php echo h($contractor['Contractor']['activo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $contractor['Contractor']['id']), array('class' => 'btn btn-sm btn-primary')); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $contractor['Contractor']['id']), array('class' => 'btn btn-sm btn-primary')); ?>
			<?php echo $this->Form->postLink('Eliminar', array('action' => 'delete', $contractor['Contractor']['id']), array('class' => 'btn btn-sm btn-primary'), array('Estas seguro que quieres eliminar el trabajo #', $contractor['Contractor']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
                                            
                                            
                                        </table>
                                    </div>
                                </div>
                            </div>

				</div><!-- Main Wrapper -->
        
