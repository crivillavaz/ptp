<div class="page-title">
  <h3>Áreas de trabajo</h3>
</div>
<div id="main-wrapper">
  <div class="col-md-9">
  	<div class="panel panel-white">
    <div class="panel-body">
      <div class="permissions form">
        <?php echo $this->Form->create('Option'); ?>
        <fieldset>
          <legend><?php echo __('Crear nueva'); ?></legend>
          <div class="form-group col-md-12">
          	<?php echo $this->Form->input('id'); ?>
            <?php echo $this->Form->input('opcion', array('class' => 'form-control', 'placeholder' => '','label' => 'Tipo de Riesgo')); ?>
            <?php echo $this->Form->input('Risk', array('class' => 'form-control', 'placeholder' => '','label' => 'Riesgo', 'multiple' => 'checkbox')); ?>
          </div>
        </fieldset>
        <?php $options = array('class' => 'btn btn-primary', 'label' => 'Editar Tipo de Riesgo'); ?>
	 <br />
	<?php echo $this->Form->end($options); ?>
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
