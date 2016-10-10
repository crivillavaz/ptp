<div class="page-title">
  <h3>Editar Usuario</h3>
</div>
<div id="main-wrapper">
  <div class="row">
    <div class="col-md-9">
      <div class="panel panel-white">
        <div class="panel-heading clearfix">
          <h4 class="panel-title">Capture la siguiente información</h4>
        </div>
        <div class="panel-body">
          <?php echo $this->Form->create('User'); ?>
          <fieldset>
            <div class="form-group col-md-6">
              <?php echo $this->Form->input('id'); ?>
              <?php echo $this->Form->input('fullname', array('label' => false, 'class' => 'form-control',  'placeholder' => 'Nombre Completo'), 'required'); ?>
            </div>
            <div class="form-group col-md-6">
              <?php echo $this->Form->input('username', array('label' => false, 'class' => 'form-control',  'placeholder' => 'Usuario'), 'required'); ?>
            </div>
            <div class="form-group col-md-6">
              <?php echo $this->Form->input('email', array('label' => false, 'class' => 'form-control',  'placeholder' => 'Correo electrónico'), 'required'); ?>
            </div>
            <div class="form-group col-md-6">
              <?php echo $this->Form->input('number', array('label' => false, 'class' => 'form-control',  'placeholder' => 'Teléfono'), 'required'); ?>
            </div>
            <div class="form-group col-md-6">
              <?php echo $this->Form->input('role', array('class' => 'form-control', 'label' => 'Rol en el sistema', 'type' => 'select', 'options' => array('admin' => 'Administrador', 'lider' => 'Lider de proyecto', 'supervisor' => 'Supervisor', 'trabajador' => 'Trabajador', 'vigilante' => 'Vigilancia', 'ehs' => 'EHS'))); ?>
            </div>
             <div id="escondido" class="initiallyHidden">
            	<div class="form-group col-md-6">
              <?php echo $this->Form->input('contractor_id', array('type' => 'select', 'label' => 'Empresa a la que pertenece', 'class' => 'form-control',  'placeholder' => 'Usuario activo?')); ?>
            	</div>
            <div class="form-group col-md-6">
              <?php echo $this->Form->input('imss', array('label' => 'Numero IMSS', 'class' => 'form-control')); ?>
            </div>
            </div>
            <div class="form-group col-md-6">
              <?php echo $this->Form->input('activo', array('type' => 'checkbox', 'label' => 'Activo', 'class' => 'form-control',  'placeholder' => 'Usuario activo?', 'required' => true)); ?>
            </div>
          </fieldset>
          <div id="outer">
          	<?php $options = array('class' => 'btn btn-success', 'label' => 'Editar usuario'); ?> <div class="inner"></div>
            <div class="inner"><?php echo $this->Form->end($options); ?></div>
          </div>
          
          
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="panel panel-white">
        <div class="panel-heading clearfix">
          <h4 class="panel-title">´También puedes</h4>
        </div>
        <div class="panel-body">
          <button class="btn btn-default btn-block"><?php echo $this->Html->link(__('Ver todos los usuarios'), array('action' => 'index')); ?></button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<style type="text/css">
	#outer
{
    width:100%;
    text-align: left;
}
.inner
{
    display: inline-block;
}
.initiallyHidden{
	display: none;
}
</style>
<script type="text/javascript">

  	$('#UserRole').on('change', function(){
  	var contratista = $('#UserRole :selected').val()
  	
  	if (contratista != 'admin') {
   		$('.initiallyHidden').show();
   		} else {$('.initiallyHidden').hide();};

     });
   	

  </script>