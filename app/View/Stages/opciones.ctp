<?php $op = array_combine($opcion, $opcion); ?>
<div class="form-group col-md-4">
  <?php echo $this->Form->input('provocacion', array('class' => 'form-control', 'options' => $op, 'type' => 'select', 'label' => 'Riesgos', 'name' => 'data[Step][provocacion]', 'id' => 'StageProvocacion',)); ?>
</div>
<div class="form-group col-md-4">
  <?php echo $this->Form->input('provpor', array('class' => 'form-control', 'label' => 'Provocado por:', 'name' => 'data[Step][provpor]', 'id' => 'StageProvpor',)); ?>
</div>
<div class="form-group col-md-4">
  <?php echo $this->Form->input('probabilidad', array('class' => 'form-control', 'label' => 'grado de probabilidad', 'name' => 'data[Step][probabilidad]', 'id' => 'StageProbabilidad', 'options' => array(1 => 'Muy bajo', 2 => 'Bajo', 3 => 'Moderado', 4 => 'Alto', 5 => 'Muy Alto'))); ?>
</div>
<div class="form-group col-md-4">
  <?php echo $this->Form->input('severidad', array('class' => 'form-control', 'label' => 'Provocado por:', 'name' => 'data[Step][severidad]', 'id' => 'StageSeveridad', 'options' => array(1 => 'Grave', 2 => 'Mayor', 3 => 'Fatal'))); ?>
</div>