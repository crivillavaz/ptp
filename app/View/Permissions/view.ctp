<div class="page-title">
  <h3>Permisos</h3>
</div>
<div id="main-wrapper">
  <?php echo $this->Html->link(__('Todos los permisos'), array('action' => 'index'), array('class' => 'btn  btn-success')); ?>
  <?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $permission['Permission']['id']), array('class' => 'btn  btn-success')); ?>
  <?php echo $this->Html->link(__('Imprimir'), array('action' => 'view', $permission['Permission']['id'], 'ext' => 'pdf'), array('class' => 'btn  btn-success')); ?>
<div class="panel panel-white">
<div class="panel-body">
  <div class="permissions view">
    <div class="form-group col-md-4">
      <label for="<?php echo $permission['Job']['nombre'] ?>">Tipo de Trabajo</label>
      <input type="text" class="form-control" name="<?php echo $permission['Job']['nombre'] ?>"  value="<?php echo $permission['Job']['nombre'] ?>" disabled>
    </div>
    <div class="form-group  col-md-4">
      <label for="<?php echo $permission['Contractor']['nombre'] ?>">Contratista</label>
      <input type="text" class="form-control" name="<?php echo $permission['Contractor']['nombre'] ?>"  value="<?php echo $permission['Contractor']['nombre'] ?>" disabled>
    </div>
    <div class="form-group col-md-4">
      <label for="<?php echo $permission['Area']['nombre'] ?>">Área</label>
      <input type="text" class="form-control" name="<?php echo $permission['Area']['nombre'] ?>"  value="<?php echo $permission['Area']['nombre'] ?>" disabled>
    </div>
    <div class="form-group col-md-4">
      <label for="<?php echo $permission['Permission']['trabreal'] ?>">Trabajo a realizar</label>
      <input type="text" class="form-control" name="<?php echo $permission['Permission']['trabreal'] ?>"  value="<?php echo $permission['Permission']['trabreal'] ?>" disabled>
    </div>
    <div class="form-group col-md-8">
      <label for="<?php echo $permission['Permission']['descripcion'] ?>">Descripción</label>
      <input type="text" class="form-control" name="<?php echo $permission['Permission']['descripcion'] ?>"  value="<?php echo $permission['Permission']['descripcion'] ?>" disabled>
    </div>
    <div class="form-group col-md-4">
      <label for="<?php echo $permission['Permission']['supemp'] ?>">Supervisor Contratista</label>
      <input type="text" class="form-control" name="<?php echo $permission['Permission']['supemp'] ?>"  value="<?php echo $permission['Permission']['supemp'] ?>" disabled>
    </div>
    <div class="form-group col-md-4">
      <label for="<?php echo $permission['Permission']['supcontr'] ?>">Lider del Proyecto</label>
      <input type="text" class="form-control" name="<?php echo $permission['Permission']['supcontr'] ?>"  value="<?php echo $permission['Permission']['supcontr'] ?>" disabled>
    </div>
    <!-- <div class="form-group col-md-4">
      <label for="<?php // echo $permission['Permission']['supare'] ?>">Responsable del área</label>
      <input type="text" class="form-control" name="<?php echo $permission['Permission']['supare'] ?>"  value="<?php // echo $permission['Permission']['supare'] ?>" disabled>
    </div> -->
    <div class="form-group col-md-4">
      <label for="<?php echo $permission['Permission']['ubicacion'] ?>">Ubicación</label>
      <input type="text" class="form-control" name="<?php echo $permission['Permission']['ubicacion'] ?>"  value="<?php echo $permission['Permission']['ubicacion'] ?>" disabled>
    </div>
    
    <div class="form-group col-md-12">
      <?php if (!empty($permission['User'])): ?>
      <?php foreach ($permission['User'] as $user): ?>
      <?php echo $this->Form->input('User', array('class' => 'form-control', 'value' => $user['fullname'], 'label' => 'Trabajadores', 'disabled' => true)); ?>
      <?php endforeach; ?>
      <?php endif; ?>
    </div>
    <div class="form-group col-md-12">
      <?php if (!empty($permission['Risk'])): ?>
      <label>Riesgos a conciderar</label>
      <?php foreach ($permission['Risk'] as $risk): ?>
      <?php echo $this->Form->input('Risk', array('class' => 'form-control', 'value' => $risk['nombre'], 'label' => false, 'disabled' => true)); ?>
      <?php endforeach; ?>
      <?php endif; ?>
    </div>
    <div class="form-group col-md-12">
      <?php if (!empty($permission['Rule'])): ?>
      <label>Reglas de Segurdad</label>
      <?php foreach ($permission['Rule'] as $rule): ?>
      <?php echo $this->Form->input('Rule', array( 'class' => 'form-control', 'placeholder' => 'reglas', 'value' => $rule['nombre'], 'label' => false, 'disabled' => true)); ?>
      <?php endforeach; ?>
      <?php endif; ?>
    </div>
    <?php if($current_user['role'] == 'admin' || 'ehs'): ?>
    <div class="form-group col-md-3">
      <div class="ios-switch switch-md">
        <?php echo $this->Form->create('Permission', array('id' => 'autoehs', 'default' => false)); ?>
        <?php echo $this->Form->input('firadm', array('class' => 'js-switch fixed-header-check', 'type' => 'checkbox', 'label' => 'Autorizado por EHS', 'id' => 'ehs', 'name' => 'ehs')); ?>
        <?php $options = array('class' => 'btn btn-primary btn-lg btn-block', 'label' => 'Autorizar', 'id' => 'enviar'); ?>
                    <?php echo $this->Form->end($options); ?>
      </div>
    </div>
    <?php endif ?>
    <?php if($current_user['role'] == 'supervisor'): ?>
    <div class="form-group col-md-3">
      <div class="ios-switch switch-md">
        <?php echo $this->Form->input('firsup', array('class' => 'js-switch fixed-header-check', 'type' => 'checkbox', 'label' => 'Autorizado por Supervisor')) ?>
      </div>
    </div>
    <?php endif ?>
    <?php if($current_user['role'] == 'lider'): ?>
    <div class="form-group col-md-3">
      <div class="ios-switch switch-md">
        <?php echo $this->Form->input('firlid', array('class' => 'js-switch fixed-header-check', 'type' => 'checkbox', 'label' => 'Autorizado por Lider de proyecto')) ?>
      </div>
    </div>
    <?php endif ?>
    <div class="form-group col-md-3">
      <div class="ios-switch switch-md">
        <?php // echo $this->Form->input('firlid', array('class' => 'js-switch fixed-header-check', 'type' => 'checkbox', 'label' => 'Firma Lider')) ?>
      </div>
    </div>
  </div>
</div>
<script>

  var myvar = <?php echo json_encode($permission['Permission']['firadm']); ?>;

  $('#ehs').change(function(){
    
                if(myvar == 0){
                  myvar = 1;
                  alert(myvar);
                  $.ajax({
                    data: { 'firadm' : myvar},
                    url: 'autorizar_ehs',
                    type: "post",
                    cache: false,
                    success: function (data) {
                      alert('paso esto');
                      $('#obtener_lider').html(data);
            
                      },
                    error: function (xhr, ajaxOptions, thrownError) {
                    alert('mal')
                  }
                  });
                  } else {
                  alert('adios');
                  alert(mybar);
                } 
  });

</script>
