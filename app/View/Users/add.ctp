<style type="text/css">
.initiallyHidden{
	display: none;
}
</style>
<div class="page-title">
  <h3>Añadir Nuevo Usuario al Sistema</h3>
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
              <?php echo $this->Form->input('fullname', array('label' => 'Nombre Completo', 'class' => 'form-control',  'placeholder' => false, 'required' => true)); ?>
            </div>
            <div class="form-group col-md-6">
              <?php echo $this->Form->input('username', array('label' => 'Usuario', 'class' => 'form-control',  'placeholder' => false, 'required' => true)); ?>
            </div>
            <div class="form-group col-md-6">
              <?php echo $this->Form->input('password', array('label' => 'Contraseña', 'class' => 'form-control', 'required' => true)); ?>
            </div>
            <div class="form-group col-md-6">
              <?php echo $this->Form->input('email', array('label' => 'Correo electrónico', 'class' => 'form-control',  'placeholder' => false, 'required' => true)); ?>
            </div>
            <div class="form-group col-md-6">
              <?php echo $this->Form->input('number', array('label' => 'Teléfono', 'class' => 'form-control',  'placeholder' => false, 'required' => true)); ?>
            </div>
            <div class="form-group col-md-6">
              <?php if($current_user['role'] == 'admin'): ?>
              <?php echo $this->Form->input('role', array('class' => 'form-control', 'label' => 'Rol en el sistema', 'type' => 'select', 'empty' => 'Elige un rol', 'options' => array('admin' => 'Administrador', 'lider' => 'Lider de proyecto', 'supervisor' => 'Supervisor', 'trabajador' => 'Trabajador', 'vigilante' => 'Vigilancia', 'ehs' => 'EHS'))); ?>
              <?php elseif($current_user['role'] == 'ehs'): ?>
              <?php echo $this->Form->input('role', array('class' => 'form-control', 'label' => 'Rol en el sistema', 'type' => 'select', 'empty' => 'Elige un rol', 'options' => array('lider' => 'Lider de proyecto', 'supervisor' => 'Supervisor', 'trabajador' => 'Trabajador', 'vigilante' => 'Vigilancia', 'ehs' => 'EHS'))); ?>
            <?php elseif($current_user['role'] == 'vigilante'): ?>
              <?php echo $this->Form->input('role', array('class' => 'form-control', 'label' => 'Rol en el sistema', 'type' => 'select', 'empty' => 'Elige un rol', 'options' => array('lider' => 'Lider de proyecto', 'supervisor' => 'Supervisor', 'trabajador' => 'Trabajador', 'vigilante' => 'Vigilancia'))); ?>
              <?php elseif($current_user['role'] == 'lider'): ?>
                <?php echo $this->Form->input('role', array('class' => 'form-control', 'label' => 'Rol en el sistema', 'type' => 'select', 'empty' => 'Elige un rol', 'options' => array('trabajador' => 'Trabajador'))); ?>
              <?php endif ?>        
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
          <?php $options = array('class' => 'btn btn-success', 'label' => 'Crear usuario'); ?>
          <br />
          <?php echo $this->Form->end($options); ?>
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

  <script type="text/javascript">
  	$('#UserRole').on('change', function(){
  	var contratista = $('#UserRole :selected').val()
  	
  	if (contratista != 'admin') {
   		$('.initiallyHidden').show();
   		} else {$('.initiallyHidden').hide();};

     });
   	

  </script>

 
