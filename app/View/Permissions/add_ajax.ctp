<?php $sup = array_combine($supervisor, $supervisor); ?>

<?php echo $this->Form->input('supemp', array('class' => 'form-control', 'placeholder' => 'Supervisor', 'label' => 'Supervisor del Trabajo', 'type' => 'select', 'name' => 'data[Permission][supemp]', 'id' => 'PermissionSupemp', 'options' => $sup, 'empty' => '...', 'required' => 'true')); ?>