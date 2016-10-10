<div class="page-title">
                    <h3>Tipos de riesgos</h3>
                </div>
                <div id="main-wrapper">
					<div class="panel panel-white">
                                <div class="panel-body">
                                	<?php echo $this->Html->link('Riesgos', array('controller' => 'risks', 'action' => 'index'), array("class" => 'btn btn-success m-b-sm')) ?>
                                    <?php echo $this->Html->link('Nuevo tipo de riesgo', array('controller' => 'options', 'action' => 'add'), array("class" => 'btn btn-success m-b-sm')) ?>
                                	<?php echo $this->Html->link('Nuevo Riesgo', array('controller' => 'risks', 'action' => 'add'), array("class" => 'btn btn-success m-b-sm')) ?>
                                    <?php echo $this->Html->link('Nuevo tipo de riesgo', array('controller' => 'options', 'action' => 'add'), array("class" => 'btn btn-success m-b-sm')) ?>
                                    <div class="table-responsive">
                                        <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                            <thead>
	<tr>
			<th><?php echo __('id'); ?></th>
			<th><?php echo __('opcion'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
                                            <tbody>
	<?php foreach ($options as $option): ?>
	<tr>
		<td><?php echo h($option['Option']['id']); ?>&nbsp;</td>
		<td><?php echo h($option['Option']['opcion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $option['Option']['id']), array('class' => 'btn btn-sm btn-primary')); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $option['Option']['id']), array('class' => 'btn btn-sm btn-primary')); ?>
			<?php echo $this->Form->postLink('Eliminar', array('action' => 'delete', $option['Option']['id']), array('class' => 'btn btn-sm btn-primary'), array('Estas seguro que quieres eliminar el trabajo #', $option['Option']['id'])); ?>
			
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
                                            
                                        </table>
                                    </div>
                                </div>
                            </div>

				</div><!-- Main Wrapper -->
      