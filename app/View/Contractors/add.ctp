<div class="page-title">
  <h3>Contratistas</h3>
</div>
<div id="main-wrapper">
  <div class="col-md-9">
  	<div class="panel panel-white">
    <div class="panel-body">
      <div class="permissions form">
        <?php echo $this->Form->create('Contractor'); ?>
        <fieldset>
          <legend><?php echo __('Crear nuevo'); ?></legend>
          
          <div class="form-group col-md-6">
            <?php echo $this->Form->input('nombre', array('class' => 'form-control', 'placeholder' => '','label' => 'Nombre de la Empresa')); ?>
          </div>
          <div class="form-group col-md-6">
            <?php echo $this->Form->input('giro', array('class' => 'form-control', 'placeholder' => '','label' => 'Giro de la empresa')); ?>
          </div>
          <div class="form-group col-md-6">
            <?php echo $this->Form->input('rfc', array('class' => 'form-control', 'placeholder' => '','label' => 'RFC')); ?>
          </div>
          <div class="form-group col-md-6">
            <?php echo $this->Form->input('regpat', array('class' => 'form-control', 'placeholder' => '','label' => 'Registro Patronal')); ?>
          </div>
          <div class="form-group col-md-6">
             <?php echo $this->Form->input('activo', array('class' => 'js-switch fixed-header-check', 'type' => 'checkbox', 'label' => 'Empresa Activa')) ?>
          </div>
         
        </fieldset>
        <?php $options = array('class' => 'btn btn-primary', 'label' => 'Crear Nueva'); ?>
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
