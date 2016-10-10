<div class="page-title">
  <h3>Ver trabajo</h3>
</div>
<div id="main-wrapper">
  <div class="col-md-9">
  	<div class="panel panel-white">
    <div class="panel-body">
      <div class="permissions form">
        <dl  class="dl-horizontal">
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($job['Job']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($job['Job']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($job['Job']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($job['Job']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
      </div>
    </div>
    
<div class="related">
	<h3><?php echo __('Related Permissions'); ?></h3>
	<?php if (!empty($job['Permission'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Job Id'); ?></th>
		<th><?php echo __('Contractor Id'); ?></th>
		<th><?php echo __('Trabreal'); ?></th>
		<th><?php echo __('Supare'); ?></th>
		<th><?php echo __('Area Id'); ?></th>
		<th><?php echo __('Ubicacion'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Notas'); ?></th>
		<th><?php echo __('Activo'); ?></th>
		<th><?php echo __('Supemp'); ?></th>
		<th><?php echo __('Supcontr'); ?></th>
		<th><?php echo __('Firsup'); ?></th>
		<th><?php echo __('Firadm'); ?></th>
		<th><?php echo __('Firmlid'); ?></th>
		<th><?php echo __('Estatus'); ?></th>
		<th><?php echo __('Firmehs'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Finicio'); ?></th>
		<th><?php echo __('Fin'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($job['Permission'] as $permission): ?>
		<tr>
			<td><?php echo $permission['id']; ?></td>
			<td><?php echo $permission['job_id']; ?></td>
			<td><?php echo $permission['contractor_id']; ?></td>
			<td><?php echo $permission['trabreal']; ?></td>
			<td><?php echo $permission['supare']; ?></td>
			<td><?php echo $permission['area_id']; ?></td>
			<td><?php echo $permission['ubicacion']; ?></td>
			<td><?php echo $permission['descripcion']; ?></td>
			<td><?php echo $permission['notas']; ?></td>
			<td><?php echo $permission['activo']; ?></td>
			<td><?php echo $permission['supemp']; ?></td>
			<td><?php echo $permission['supcontr']; ?></td>
			<td><?php echo $permission['firsup']; ?></td>
			<td><?php echo $permission['firadm']; ?></td>
			<td><?php echo $permission['firmlid']; ?></td>
			<td><?php echo $permission['estatus']; ?></td>
			<td><?php echo $permission['firmehs']; ?></td>
			<td><?php echo $permission['created']; ?></td>
			<td><?php echo $permission['modified']; ?></td>
			<td><?php echo $permission['finicio']; ?></td>
			<td><?php echo $permission['fin']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'permissions', 'action' => 'view', $permission['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'permissions', 'action' => 'edit', $permission['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'permissions', 'action' => 'delete', $permission['id']), array(), __('Are you sure you want to delete # %s?', $permission['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Permission'), array('controller' => 'permissions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Risks'); ?></h3>
	<?php if (!empty($job['Risk'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Job Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($job['Risk'] as $risk): ?>
		<tr>
			<td><?php echo $risk['id']; ?></td>
			<td><?php echo $risk['nombre']; ?></td>
			<td><?php echo $risk['created']; ?></td>
			<td><?php echo $risk['modified']; ?></td>
			<td><?php echo $risk['job_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'risks', 'action' => 'view', $risk['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'risks', 'action' => 'edit', $risk['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'risks', 'action' => 'delete', $risk['id']), array(), __('Are you sure you want to delete # %s?', $risk['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Risk'), array('controller' => 'risks', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Rules'); ?></h3>
	<?php if (!empty($job['Rule'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Job Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($job['Rule'] as $rule): ?>
		<tr>
			<td><?php echo $rule['id']; ?></td>
			<td><?php echo $rule['nombre']; ?></td>
			<td><?php echo $rule['job_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'rules', 'action' => 'view', $rule['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'rules', 'action' => 'edit', $rule['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'rules', 'action' => 'delete', $rule['id']), array(), __('Are you sure you want to delete # %s?', $rule['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Rule'), array('controller' => 'rules', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Steps'); ?></h3>
	<?php if (!empty($job['Step'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Herramientas'); ?></th>
		<th><?php echo __('Edofco'); ?></th>
		<th><?php echo __('Comentarios'); ?></th>
		<th><?php echo __('Risk Id'); ?></th>
		<th><?php echo __('Provocacion'); ?></th>
		<th><?php echo __('Cingenieria'); ?></th>
		<th><?php echo __('Cprocedimientos'); ?></th>
		<th><?php echo __('Cepp'); ?></th>
		<th><?php echo __('Job Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($job['Step'] as $step): ?>
		<tr>
			<td><?php echo $step['id']; ?></td>
			<td><?php echo $step['nombre']; ?></td>
			<td><?php echo $step['herramientas']; ?></td>
			<td><?php echo $step['edofco']; ?></td>
			<td><?php echo $step['comentarios']; ?></td>
			<td><?php echo $step['risk_id']; ?></td>
			<td><?php echo $step['provocacion']; ?></td>
			<td><?php echo $step['cingenieria']; ?></td>
			<td><?php echo $step['cprocedimientos']; ?></td>
			<td><?php echo $step['cepp']; ?></td>
			<td><?php echo $step['job_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'steps', 'action' => 'view', $step['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'steps', 'action' => 'edit', $step['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'steps', 'action' => 'delete', $step['id']), array(), __('Are you sure you want to delete # %s?', $step['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Step'), array('controller' => 'steps', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

  </div>
  </div>
  <div class="col-md-3">
  	<div class="panel panel-white">
  <div class="panel-heading clearfix">
                                    <h4 class="panel-title">´También puedes</h4>
                                </div>    <div class="panel-body">

  <ul>
    <button class="btn btn-default btn-block"><?php echo $this->Html->link(__('Ver Trabajos peligrosos'), array('action' => 'index')); ?></button>
    <button class="btn btn-default btn-block"><?php echo $this->Html->link(__('Ver permisos'), array('controller' => 'permissions', 'action' => 'index')); ?> </button>
    <button class="btn btn-default btn-block"><?php echo $this->Html->link(__('Crear Permisos'), array('controller' => 'permissions', 'action' => 'add')); ?> </button>
  </ul>

  </div>
</div>
  </div>
  </div>

