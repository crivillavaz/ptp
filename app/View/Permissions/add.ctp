<div id="main-wrapper">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-white">
        <div class="panel-body">
          <div class="results"></div>
          <div id="rootwizard">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-user m-r-xs"></i>Generalidades</a></li>
              <li role="presentation"><a href="#tab2" data-toggle="tab"><i class="fa fa-truck m-r-xs"></i>Responsables</a></li>
              <li role="presentation"><a href="#tab3" data-toggle="tab"><i class="fa fa-truck m-r-xs"></i>Seguridad</a></li>
              <li role="presentation"><a href="#tab4" data-toggle="tab"><i class="fa fa-check m-r-xs"></i>Comentarios</a></li>
            </ul>
            <div class="progress progress-sm m-t-sm">
              <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
              </div>
            </div>
            <?php echo $this->Form->create('Permission', array('id' => 'wizardForm', 'default' => false)); ?>
            <div class="tab-content">
              <div class="tab-pane active fade in" id="tab1">
                <div class="row m-b-lg">
                  <div class="col-md-6">
                    <div class="row">
                      <div class="form-group col-md-6">
                        <?php echo $this->Form->input('fin', array('class' => 'form-control date-picker', 'label' => 'Fecha de Elaborción',)); ?>
                      </div>
                      <div class="form-group  col-md-6">
                        <?php echo $this->Form->input('contractor_id', array('class' => 'form-control', 'placeholder' => 'Contratista','label' => 'Empresa Contratista', 'empty' => 'Elije una compañía', 'required' => true)); ?>
                      </div>
                      <div class="form-group col-md-12">
                        <?php echo $this->Form->input('area_id', array('class' => 'form-control', 'placeholder' => 'area','label' => 'Area de trabajao', 'empty' => 'Elije area', 'required' => true)); ?>
                      </div>
                      <div class="form-group col-md-12">
                        <?php echo $this->Form->input('job_id', array('class' => 'form-control', 'placeholder' => 'Tipo de Trabajo','label' => 'Tipo de trabajo','empty' => 'Elije Tipo de Trabajo', 'required' => true)); ?>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group col-md-12">
                      <?php  echo  '<script type="text/javascript">HOLA alert(content);</script>' ?>
                      <?php echo $this->Form->input('trabreal', array('class' => 'form-control', 'placeholder' => 'Trabajo a Realizar', 'label' => 'Trabajo a Realizar')); ?>
                    </div>
                    <div class="form-group col-md-12">
                      <?php echo $this->Form->input('ubicacion', array('class' => 'form-control', 'placeholder' => 'Ubicación', 'label' => 'Ubicación')); ?>
                    </div>
                    <label>Descripción</label>
                    <div class="form-group col-md-12">
                      <?php echo $this->Form->textarea('descripcion', array('class' => 'form-control', 'placeholder' => 'Descripción')); ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tab2">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group col-md-12">
                      <div id="obtener_contratista"></div>
                    </div>
                    <div class="form-group col-md-12">
                      <div id="obtener_lider"></div>
                    </div>
                    <div class="form-group col-md-12">
                      <div id="obtener_ehs"></div>
                    </div>
                    <div class="col-md-12">
                      <div id="obtener_trabajadores"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tab3">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group col-md-12">
                      <div class="row">
                        <div class="col-md-6">
                          <div id="obtener_reglas"></div>
                        </div>
                        <div class="col-md-6">
                          <div id="obtener_riesgos"></div>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tab4">
                <div id="aqui">
                  <h2 class="no-s">Comentarios</h2>
                <div class="alert alert-isuccess m-t-sm m-b-lg" role="alert">
                  <div class="col-md-12">
                          <?php echo $this->Form->input('notas', array('class' => 'form-control', 'placeholder' => 'notas adicionales o comentarios', 'label' => 'Notas adicionales')); ?>
                        <br><br>
                    <?php $options = array('class' => 'btn btn-primary btn-lg btn-block', 'label' => 'Crear Permiso', 'id' => 'enviar'); ?>
                    <?php echo $this->Form->end($options); ?>
                    <br><br><br>
                  </div>
                </div>
                </div>
                <div id="gracias"></div>
              </div>
              <ul class="pager wizard">
                <li class="previous"><a href="#" class="btn btn-default">Anterior</a></li>
                <li class="next"><a href="#" class="btn btn-default">Siguiente</a></li>
              </ul>
              
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Row -->
</div>

<script>
  $('#PermissionContractorId').on('change', function() {
  var content = $('#PermissionContractorId :selected').val();
  $.ajax({
       url: 'http://ptpsystem.net/Permissions/obtener_trabajadores',
       data: { 'content' : content},
       type: "post",
       cache: false,
       success: function (data) {
           $('#obtener_trabajadores').html(data);
       },
       error: function (xhr, ajaxOptions, thrownError) {
          alert('mal')
       }
   });
  
  });

  $('#PermissionJobId').on('change', function() {
  var rule = $('#PermissionJobId :selected').val();
  $.ajax({
       url: 'http://ptpsystem.net/Permissions/obtener_reglas',
       data: { 'rule' : rule},
       type: "post",
       cache: false,
       success: function (data) {
           $('#obtener_reglas').html(data);
       },
       error: function (xhr, ajaxOptions, thrownError) {
          alert('mal')
       }
   });
  
  });

   $('#PermissionJobId').on('change', function() {
  var risk = $('#PermissionJobId :selected').val();
  $.ajax({
       url: 'http://ptpsystem.net/Permissions/obtener_riesgos',
       data: { 'risk' : risk},
       type: "post",
       cache: false,
       success: function (data) {
           $('#obtener_riesgos').html(data);
       },
       error: function (xhr, ajaxOptions, thrownError) {
          alert('mal')
       }
   });
  
  });

     $('#PermissionContractorId').on('change', function() {
  var sup = $('#PermissionContractorId :selected').val();
  $.ajax({
       url: 'http://ptpsystem.net/Permissions/add_ajax',
       data: { 'supervisor' : sup},
       type: "post",
       cache: false,
       success: function (data) {
           $('#obtener_contratista').html(data);
           
       },
       error: function (xhr, ajaxOptions, thrownError) {
          alert('mal')
       }
   });
  
  });
  
    $('#PermissionContractorId').on('change', function() {
  var lider = $('#PermissionContractorId :selected').val();
  $.ajax({
       url: 'http://ptpsystem.net/Permissions/obtener_lider',
       data: { 'lider' : lider},
       type: "post",
       cache: false,
       success: function (data) {
           $('#obtener_lider').html(data);
           
       },
       error: function (xhr, ajaxOptions, thrownError) {
          alert('mal')
       }
   });
  
  });

    $('#enviar').click(function() {
         var datos = $("#wizardForm").serialize();
         $.ajax({
                 type : 'POST',
                 url: 'http://ptpsystem.net/Permissions/gracias',
                 data : datos,
               success :  function(data){
                 alert('Permiso generado');
                 // $("#StepAddForm").reset();
                 $("#aqui").hide();
                 $('#gracias').html(data);
                 
  
                 
               }
         });
         return false;
     });
// $('#PermissionContractorId').on('change', function() {
//   var ehs = $('#PermissionContractorId :selected').val();
//   $.ajax({
//        url: 'obtener_ehs',
//        data: { 'ehs' : ehs},
//        type: "post",
//        cache: false,
//        success: function (data) {
//            $('#obtener_ehs').html(data);
           
//        },
//        error: function (xhr, ajaxOptions, thrownError) {
//           alert('mal')
//        }
//    });
  
//   });


  
  
  
</script>
