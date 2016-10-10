<div class="page-title">
  <h3>Análisis de riesgos en el trabajo</h3>
</div>
<div id="main-wrapper">
  <?php echo $this->Html->link(__('Todos los análisis'), array('action' => 'index'), array('class' => 'btn  btn-success')); ?>
  <?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $stage['Stage']['id']), array('class' => 'btn  btn-success')); ?>
  <?php echo $this->Html->link(__('Imprimir'), array('action' => 'view', $stage['Stage']['id'], 'ext' => 'pdf'), array('class' => 'btn  btn-success')); ?>
<div class="panel panel-white">
<div class="panel-body">
	<h2>Generalidades</h2>
  <div class="permissions view">
    <div class="form-group col-md-4">
      <label for="<?php echo h($stage['Stage']['frealizacion']); ?>">fecha de realización</label>
      <input type="text" class="form-control" name="<?php echo h($stage['Stage']['frealizacion']); ?>"  value="<?php echo h($stage['Stage']['frealizacion']); ?>" disabled>
    </div>
    <div class="form-group  col-md-4">
      <label for="<?php echo h($stage['Stage']['fejecucion']); ?>">Ejecución</label>
      <input type="text" class="form-control" name="<?php echo h($stage['Stage']['fejecucion']); ?>"  value="<?php echo h($stage['Stage']['fejecucion']); ?>" disabled>
    </div> 
    <div class="form-group col-md-4">
      <label for="<?php echo $stage['Contractor']['nombre'] ?>">Empresa Contratista</label>
      <input type="text" class="form-control" name="<?php echo $stage['Contractor']['nombre'] ?>"  value="<?php echo $stage['Contractor']['nombre'] ?>" disabled>
    </div>
    <div class="form-group col-md-4">
      <label for="<?php echo h($stage['Stage']['area']); ?>">Area</label>
      <input type="text" class="form-control" name="<?php echo h($stage['Stage']['area']); ?>"  value="<?php echo h($stage['Stage']['area']); ?>" disabled>
    </div>
    <div class="form-group col-md-4">
      <label for="<?php echo h($stage['Stage']['ubicacion']); ?>">Ubicación</label>
      <input type="text" class="form-control" name="<?php echo h($stage['Stage']['ubicacion']); ?>"  value="<?php echo h($stage['Stage']['ubicacion']); ?>" disabled>
    </div>
    <div class="form-group col-md-4">
      <label for="<?php echo h($stage['Stage']['supcontr']); ?>">Lider del Proyecto</label>
      <input type="text" class="form-control" name="<?php echo h($stage['Stage']['supcontr']); ?>"  value="<?php echo h($stage['Stage']['supcontr']); ?>" disabled>
    </div>
    <div class="form-group col-md-4">
      <label for="<?php echo h($stage['Stage']['supemp']); ?>">Supervisor</label>
      <input type="text" class="form-control" name="<?php echo h($stage['Stage']['supemp']); ?>"  value="<?php echo h($stage['Stage']['supemp']); ?>" disabled>
    </div>
    
    
    <div class="form-group col-md-8">
      <label for="<?php echo h($stage['Stage']['descripcion']); ?>">descripción</label>
      <input type="text" class="form-control" name="<?php echo h($stage['Stage']['descripcion']); ?>"  value="<?php echo h($stage['Stage']['descripcion']); ?>" disabled>
    </div>
    <div class="form-group col-md-12">
      <label for="<?php echo h($stage['Stage']['notas']); ?>">Notas</label>
      <input type="text" class="form-control" name="<?php echo h($stage['Stage']['notas']); ?>"  value="<?php echo h($stage['Stage']['notas']); ?>" disabled>
    </div>
    
    
    <!-- <div class="form-group col-md-4">
      <label for="<?php // echo $permission['Permission']['supare'] ?>">Responsable del área</label>
      <input type="text" class="form-control" name="<?php // echo $permission['Permission']['supare'] ?>"  value="<?php // echo $permission['Permission']['supare'] ?>" disabled>
    </div> -->
    <!-- <div class="form-group col-md-3">
      <div class="ios-switch switch-md">
        <?php // echo $this->Form->input('activo', array('class' => 'js-switch fixed-header-check', 'type' => 'checkbox', 'label' => 'Activo')); ?>
      </div>
    </div>
    <div class="form-group col-md-3">
      <div class="ios-switch switch-md">
        <?php // echo $this->Form->input('firsup', array('class' => 'js-switch fixed-header-check', 'type' => 'checkbox', 'label' => 'Firma Supervisor')) ?>
      </div>
    </div>
    <div class="form-group col-md-3">
      <div class="ios-switch switch-md">
        <?php // echo $this->Form->input('firadm', array('class' => 'js-switch fixed-header-check', 'type' => 'checkbox', 'label' => 'Firma Administrador')) ?>
      </div>
    </div>
    <div class="form-group col-md-3">
      <div class="ios-switch switch-md">
        <?php // echo $this->Form->input('firlid', array('class' => 'js-switch fixed-header-check', 'type' => 'checkbox', 'label' => 'Firma Lider')) ?>
      </div>
    </div> -->
    <br><br><br>
    <h2>Etapas de trabajo</h2>
    <br><br>
	<?php if (!empty($stage['Step'])): ?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Nombre'); ?></th>
				<th><?php echo __('Herramientas'); ?></th>
				<th><?php echo __('Estado Fisico'); ?></th>
				<th><?php echo __('Riesgo'); ?></th>
				<th><?php echo __('Provocacion'); ?></th>
				<th><?php echo __('Por'); ?></th>
			</tr>
		<?php foreach ($stage['Step'] as $step): ?>
		<tr>
			<td><?php echo $step['id']; ?></td>
			<td><?php echo $step['nombre']; ?></td>
			<td><?php echo $step['herramientas']; ?></td>
			<td><?php echo $step['edofco']; ?></td>
			<td><?php echo $step['Risk']['nombre']; ?></td>
			<td><?php echo $step['provocacion']; ?></td>
			<td><?php echo $step['provpor']; ?></td>
		</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>
	<br><br>
	<h2>Trabajadores asignados</h2>
	<br><br>
	<?php if (!empty($stage['User'])): ?>
<table class="table">
<tr>
<th><?php echo __('Id'); ?></th>
<th><?php echo __('Nombre Completo'); ?></th>
<th><?php echo __('Email'); ?></th>
<th><?php echo __('Teléfono'); ?></th>
<th><?php echo __('Rol'); ?></th>
<th><?php echo __('Empresa'); ?></th>
</tr>
<?php foreach ($stage['User'] as $user): ?>
<tr>
<td><?php echo $user['id']; ?></td>
<td><?php echo $user['fullname']; ?></td>
<td><?php echo $user['email']; ?></td>
			<td><?php echo $user['number']; ?></td>
<td><?php echo $user['role']; ?></td>
<td><?php echo $user['Contractor']['nombre']; ?></td>
</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
  </div>
</div>
<div class="panel-body">
	
</div>

<div class="panel-body">
	
</div>		
