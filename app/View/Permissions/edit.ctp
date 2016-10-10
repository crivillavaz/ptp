<div class="page-title">
  <h3>Editar Permiso</h3>
</div>
<div id="main-wrapper">
  <?php echo $this->Html->link(__('Todos los permisos'), array('action' => 'index'), array('class' => 'btn  btn-success')); ?>
  <?php echo $this->Html->link(__('Imprimir'), array('action' => 'view', $permission['Permission']['id'], 'ext' => 'pdf'), array('class' => 'btn  btn-success')); ?>
<div class="panel panel-white">
<div class="panel-body">
  <div class="permissions view">
  	<?php echo $this->Form->create('Permission'); ?>
    <div class="form-group col-md-4">
    	<?php echo $this->Form->input('id'); ?>
      	<?php echo $this->Form->input('fin', array('class' => 'form-control date-picker', 'label' => 'Fecha de Elaborción',)); ?>
		
 		
 		
 		
		
		
		
		
    </div>
    <div class="form-group  col-md-4">
      <?php echo $this->Form->input('contractor_id', array('class' => 'form-control', 'placeholder' => 'Contratista','label' => 'Empresa Contratista', 'empty' => 'Elije una compañía', 'required' => true)); ?>
    </div>
    <div class="form-group col-md-4">
     <?php echo $this->Form->input('area_id', array('class' => 'form-control', 'placeholder' => 'area','label' => 'Area de trabajao', 'empty' => 'Elije area', 'required' => true)); ?>
    </div>
    <div class="form-group col-md-4">
      <?php echo $this->Form->input('job_id', array('class' => 'form-control', 'placeholder' => 'Tipo de Trabajo','label' => 'Tipo de trabajo','empty' => 'Elije Tipo de Trabajo', 'required' => true)); ?>
    </div>
    <div class="form-group col-md-8">
      <?php echo $this->Form->input('trabreal', array('class' => 'form-control', 'placeholder' => 'Trabajo a Realizar', 'label' => 'Trabajo a Realizar')); ?>
    </div>
    <div class="form-group col-md-4">
      <?php echo $this->Form->input('ubicacion', array('class' => 'form-control', 'placeholder' => 'Ubicación', 'label' => 'Ubicación')); ?>
    </div>
    <div class="form-group col-md-4">
      <?php echo $this->Form->textarea('descripcion', array('class' => 'form-control', 'placeholder' => 'Descripción')); ?>
    </div>
    <!-- <div class="form-group col-md-4">
      <label for="<?php // echo $permission['Permission']['supare'] ?>">Responsable del área</label>
      <input type="text" class="form-control" name="<?php echo $permission['Permission']['supare'] ?>"  value="<?php // echo $permission['Permission']['supare'] ?>">
    </div> -->
    <div class="form-group col-md-4">
      <?php echo $this->Form->input('notas', array('class' => 'form-control', 'placeholder' => 'notas adicionales o comentarios', 'label' => 'Notas adicionales')); ?>
    </div>
    
    <div class="form-group col-md-12">
      <?php $options = array('class' => 'btn btn-primary btn-lg btn-block', 'label' => 'Crear Permiso', 'id' => 'enviar'); ?>
                    <?php echo $this->Form->end($options); ?>
    </div>
    <div class="form-group col-md-12">
      <?php if (!empty($permission['Risk'])): ?>
      <label>Riesgos a conciderar</label>
      <?php foreach ($permission['Risk'] as $risk): ?>
      <?php echo $this->Form->input('Risk', array('class' => 'form-control', 'value' => $risk['nombre'], 'label' => false, 'disabled' => false)); ?>
      <?php endforeach; ?>
      <?php endif; ?>
    </div>
    <div class="form-group col-md-12">
      <?php if (!empty($permission['Rule'])): ?>
      <label>Reglas de Segurdad</label>
      <?php foreach ($permission['Rule'] as $rule): ?>
      <?php echo $this->Form->input('Rule', array( 'class' => 'form-control', 'placeholder' => 'reglas', 'value' => $rule['nombre'], 'label' => false, 'disabled' => false)); ?>
      <?php endforeach; ?>
      <?php endif; ?>
    </div>
    <div class="form-group col-md-3">
      <div class="ios-switch switch-md">
        <?php echo $this->Form->input('activo', array('class' => 'js-switch fixed-header-check', 'type' => 'checkbox', 'label' => 'Activo')); ?>
      </div>
    </div>
    <div class="form-group col-md-3">
      <div class="ios-switch switch-md">
        <?php echo $this->Form->input('firsup', array('class' => 'js-switch fixed-header-check', 'type' => 'checkbox', 'label' => 'Firma Supervisor')) ?>
      </div>
    </div>
    <div class="form-group col-md-3">
      <div class="ios-switch switch-md">
        <?php echo $this->Form->input('firadm', array('class' => 'js-switch fixed-header-check', 'type' => 'checkbox', 'label' => 'Firma Administrador')) ?>
      </div>
    </div>
    <div class="form-group col-md-3">
      <div class="ios-switch switch-md">
        <?php echo $this->Form->input('firlid', array('class' => 'js-switch fixed-header-check', 'type' => 'checkbox', 'label' => 'Firma Lider')) ?>
      </div>
    </div>
  </div>
</div>

<div class="permissions form">

	<fieldset>
		<legend><?php echo __('Edit Permission'); ?></legend>
	<?php
		
		echo $this->Form->input('job_id');
		echo $this->Form->input('contractor_id');
		echo $this->Form->input('trabreal');
		echo $this->Form->input('supcontr');
		echo $this->Form->input('supemp');
		echo $this->Form->input('supare');
		echo $this->Form->input('area_id');
		echo $this->Form->input('ubicacion');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('notas');
		echo $this->Form->input('activo');
		echo $this->Form->input('firsup');
		echo $this->Form->input('firadm');
		echo $this->Form->input('firmlid');
		echo $this->Form->input('estatus');
		echo $this->Form->input('Risk');
		echo $this->Form->input('Worker');
		echo $this->Form->input('Rule');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Permission.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Permission.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Permissions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contractors'), array('controller' => 'contractors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contractor'), array('controller' => 'contractors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Areas'), array('controller' => 'areas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area'), array('controller' => 'areas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Permission Rules'), array('controller' => 'permission_rules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Permission Rule'), array('controller' => 'permission_rules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Risks'), array('controller' => 'risks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Risk'), array('controller' => 'risks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Workers'), array('controller' => 'workers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Worker'), array('controller' => 'workers', 'action' => 'add')); ?> </li>
	</ul>
</div>
