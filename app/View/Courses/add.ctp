
<div class="page-title">
  <h3>Asignar Curso a Trabajador</h3>
</div>
<div id="main-wrapper">
  <div class="panel panel-white">
    <div class="panel-body">
      <div class="permissions form">
        <?php echo $this->Form->create('Course', array('type' => 'file',  'novalidate' => 'novalidate')); ?>
        <fieldset>
          <legend><?php echo __('Add Course'); ?></legend>
          <div class="form-group col-md-12">
            <?php echo $this->Form->input('job_id', array('class' => 'form-control', 'placeholder' => 'Tipo de Trabajo', 'label' => 'Tipo de trabajo')); ?>
          </div>

         <div class="form-group col-md-6">
            <?php echo $this->Form->input('fin', array('class' => 'form-control date-picker', 'label' => 'Vencimiento del curso')); ?>
          </div> 
          <div class="form-group col-md-12">
            <?php echo $this->Form->input('pdf', array('type' => 'file', 'label' => 'PDF', 'id' => 'PDF', 'class' => 'file', 'data-show-upload' => 'true', 'data-show-caption' => 'true'));
              echo $this->Form->input('pdf_dir', array('type' => 'hidden')); ?>
          </div>
          <div class="form-group col-md-12">
            <?php echo $this->Form->input('user_id', array('type' => 'select', 'class' => 'form-control', 'placeholder' => 'Personal que realiza el trabajo', 'label' => 'Personal que realiza el trabajo', 'multiple' => false)); ?>
          </div>
          <div class="form-group col-md-3">
            <div class="ios-switch switch-md">
              <?php echo $this->Form->input('activo', array('class' => 'js-switch fixed-header-check', 'type' => 'checkbox', 'label' => 'Permiso Activo')) ?>
            </div>
          </div>
        </fieldset>
        <?php echo $this->Form->end(__('Submit')); ?>
        </div>
      </div>
    </div>
  </div>
</div>