<div class="page-title">
                    <h3>Áreas de trabajo</h3>
                </div>
                <div id="main-wrapper">
					<div class="panel panel-white">
                                <div class="panel-body">
                                	<?php echo $this->Html->link('Todas las áreas', array('controller' => 'areas', 'action' => 'add'), array("class" => 'btn btn-success m-b-sm')) ?>
                                    <?php echo $this->Html->link('nueva área', array('controller' => 'areas', 'action' => 'add'), array("class" => 'btn btn-success m-b-sm')) ?>
                                    <div class="table-responsive">
                                        <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                            <thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', "#"); ?></th>
			<th><?php echo $this->Paginator->sort('nombre', 'Area general de Trabajo'); ?></th>
			<th>Acciones</th>
	</tr>
	</thead>
                                            <tbody>
	<?php foreach ($areas as $area): ?>
	<tr>
		<td><?php echo h($area['Area']['id']); ?>&nbsp;</td>
		<td><?php echo h($area['Area']['nombre']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $area['Area']['id']), array('class' => 'btn btn-sm btn-primary')); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $area['Area']['id']), array('class' => 'btn btn-sm btn-primary')); ?>
			<?php echo $this->Form->postLink('Eliminar', array('action' => 'delete', $area['Area']['id']), array('class' => 'btn btn-sm btn-primary'), array('Estas seguro que quieres eliminar el trabajo #', $area['Area']['id'])); ?>
			
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
                                            
                                        </table>
                                    </div>
                                </div>
                            </div>

				</div><!-- Main Wrapper -->
        

