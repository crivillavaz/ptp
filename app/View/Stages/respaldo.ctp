<style type="text/css">
   .pager li>a, .pager li>span {
   display: inline-block;
   padding: 5px 14px;
   background-color: #f2b74c;
   border: 1px solid #f2b74c;
   border-radius: 15px;
   color: #fff
   }
   .pager .disabled>a, .pager .disabled>a:focus, .pager .disabled>a:hover, .pager .disabled>span {
   color: #fff;
   cursor: not-allowed;
   background-color: #777;
   border-color: #777;
   }
   .progress-bar-danger {
   background-color: #f2b74c;
   }
   #outer
   {
   width:100%;
   text-align: right;
   }
   .inner
   {
   display: inline-block;
   }
   .initiallyHidden{
   display: none;
   }
   .escondido{
   display: none;
   }
   #escondido{
   display: none;
   }
   .cual{
   display: none;
   }
   .proc{
   display: none;
   }
   /*#StepCcing{
   display: none;
   }*/
</style>
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
                     <li role="presentation"><a href="#tab3" data-toggle="tab"><i class="fa fa-fa-angle-double-right m-r-xs"></i>Etapas</a></li>
                     <li role="presentation"><a href="#tab4" data-toggle="tab"><i class="fa fa-fa-angle-double-right m-r-xs"></i>Finalizar</a></li>
                  </ul>
                  <div class="progress progress-sm m-t-sm">
                     <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                     </div>
                  </div>
                  <?php echo $this->Form->create('Stage', array('id' => 'wizardForm', 'default' => false)); ?>
                  <div class="tab-content">
                     <div class="tab-pane active fade in" id="tab1">
                        <div class="row m-b-lg">
                           <div class="col-md-6">
                              <div class="row">
                                 <div class="form-group col-md-6">
                                    <?php echo $this->Form->input('frealizacion', array('class' => 'form-control date-picker', 'label' => 'Fecha de Elaborción',)); ?>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <?php echo $this->Form->input('fejecucion', array('class' => 'form-control date-picker', 'label' => 'Fecha de Ejecución',)); ?>
                                 </div>
                                 <div class="form-group  col-md-6">
                                    <?php echo $this->Form->input('contractor_id', array('class' => 'form-control', 'placeholder' => 'Contratista','label' => 'Empresa Contratista', 'empty' => 'Elije una compañía', 'required' => true)); ?>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <?php echo $this->Form->input('area', array('class' => 'form-control', 'label' => 'Area de trabajao', 'empty' => 'Elije area', 'required' => true)); ?>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group col-md-12">
                                 <?php echo $this->Form->input('ubicacion', array('class' => 'form-control', 'placeholder' => 'Ubicación', 'label' => 'Ubicación')); ?>
                              </div>
                              <label>Descripción del Trabajo</label>
                              <div class="form-group col-md-12">
                                 <?php echo $this->Form->textarea('descripcion', array('class' => 'form-control', 'placeholder' => 'Descripción')); ?>
                              </div>
                           </div>
                           <ul class="pager wizard">
                              <li class="previous"><a href="#" class="btn btn-default">Anterior</a></li>
                              <li class="next" ><a href="#" class="btn btn-default">Siguiente</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="tab2">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group col-md-12">
                                 <div id="obtener_contratista"></div>
                              </div>
                              <div class="form-group col-md-12">
                                 <div id="obtener_lider"></div>
                              </div>
                              <div class="form-group col-md-12">
                                 <div id="obtener_ehs"></div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="col-md-12">
                                 <div id="obtener_trabajadores"></div>
                                 <br><br><br>
                                 <ul class="pager wizard">
                                    <li class="next" id="escondido" ><a href="#" class="btn btn-default">Siguiente</a></li>
                                    <?php $options = array('class' => 'btn btn-danger', 'label' => '', 'id' => 'enviar', 'label' => 'Enviar Info' ); ?><?php echo $this->Form->end($options); ?>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="tab3">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group col-md-12">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg">Añadir Etapa de Trabajo</button>
                                       <br>
                                       <div id="etapas">
                                       </div>
                                       <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                          <div class="modal-dialog modal-lg">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                   <?php echo $this->Form->create('Step', array('default' => false)); ?>
                                                   <fieldset>
                                                      <legend><?php echo __('Añadir etapa de trabajo'); ?></legend>
                                                      <div class="form-group col-md-4">
                                                         <?php echo $this->Form->input('nombre', array('class' => 'form-control')); ?>
                                                      </div>
                                                      <div class="form-group col-md-4">
                                                         <?php echo $this->Form->input('herramientas', array('class' => 'form-control')); ?>
                                                      </div>
                                                      <div class="form-group col-md-4">
                                                         <?php echo $this->Form->input('edofco', array('class' => 'form-control','label' => 'Estado Físico', 'type' => 'select', 'empty' => '', 'options' => array('Buen estado' => 'Buen Estado', 'Requiere Mantenimiento' => 'Requiere Mantenimiento', 'Mal Estado' => 'Mal Estado'))); ?>
                                                      </div>
                                                      <div class="form-group col-md-4">
                                                         <?php echo $this->Form->input('comentarios', array('class' => 'form-control')); ?>
                                                      </div>
                                                      <div class="form-group col-md-4">
                                                         <?php echo $this->Form->input('risk_id', array('class' => 'form-control', 'empty' => '')); ?>
                                                      </div>
                                                      <div class="escondido">
                                                         <div id="obtener_riesgo"></div>
                                                      </div>
                                                      <div class="form-group col-md-4">
                                                         <?php echo $this->Form->input('cingenieria', array('class' => 'form-control', 'label' => 'Control de ingenieria', 'options' => array(4 => 'Si', 0 => 'No'), 'type' => 'select', 'empty' => '')); ?>
                                                      </div>
                                                      <div class="cual">
                                                         <div class="form-group col-md-4">
                                                            <?php echo $this->Form->input('ccing', array('class' => 'form-control', 'label' => 'Cual')); ?>
                                                         </div>
                                                      </div>
                                                      <div id="nousar">
                                                        <div class="form-group col-md-4">
                                                         <?php echo $this->Form->input('cprocedimientos', array('class' => 'form-control', 'label' => 'Control de procedimientos', 'empty' => ' ', 'options' => array(3 => 'Si', 0 => 'No') )); ?>
                                                      </div>
                                                      <div class="proc">
                                                         <div class="form-group col-md-4">
                                                            <?php echo $this->Form->input('ccproc', array('class' => 'form-control', 'label' => 'Cual', 'id' => 'StepCcproc', 'name' => 'data[Step][ccproc]')); ?>
                                                         </div>
                                                      </div>
                                                      <div class="form-group col-md-4">
                                                         <?php echo $this->Form->input('job_id', array('class' => 'form-control', 'empty' => '', 'label' => 'Requiere Permiso de Trabajo', )); ?>
                                                      </div>
                                                      <div class="form-group col-md-12">
                                                         <?php echo $this->Form->input('Gear', array('class' => 'form-control', 'id' => 'StepGear', 'name' => 'data[Step][Gear]', 'multiple' => 'checkbox', 'label' => 'Equipo de trabajo')); ?>
                                                      </div>
                                                      </div>
                                                      <div class="form-group col-md-12">
                                                         <div id="generalidades"></div>
                                                      </div>
                                                      <div class="form-group col-md-12">
                                                        <button id="calcular">Calcular nivel del riesgo</button>
                                                         <div id="nivel_riesgo"></div>
                                                      </div>
                                                      <?php
                                                         // echo $this->Form->input('cepp');
                                                          // echo $this->Form->input('job_id');
                                                          //echo $this->Form->input('stage_id');
                                                          // echo $this->Form->input('Gear');
                                                          ?>
                                                   </fieldset>
                                                </div>
                                                <div class="modal-footer">
                                                   <div id="outer">
                                                      <div class="inner"> <?php $options = array('class' => 'btn btn-danger', 'label' => '', 'id' => 'enviar_paso', 'label' => 'Crear etapa'); ?>
                                                         <?php echo $this->Form->end($options); ?>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="tab4">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group col-md-12">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <h1>Gracias por generar el análisis, </h1>
                                       puedes verlo en el menu Análisis
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  </form>
                  <div class="result"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Row -->
</div>
<script>
   $('#StageContractorId').on('change', function() {
   var content = $('#StageContractorId :selected').val();
   $.ajax({
        url: 'http://ptpsystem.net/Stages/add_ajax',
        data: { 'content' : content},
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
   
     $('#StageContractorId').on('change', function() {
   var lider = $('#StageContractorId :selected').val();
   $.ajax({
        url: 'obtener_lider',
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
     $('#StepCingenieria').on('change', function() {
       var inge = $('#StepCingenieria :selected').val();
       if (inge = 3) {
         $('#StepCcing').show();
       } else {
         $('#StepCcing').hide();
       } 
     });
   
     
   
   $('#StageContractorId').on('change', function() {
   var x = $('#StageContractorId :selected').val();
   $.ajax({
        url: 'obtener_trabajadores',
        data: { 'trabajadores' : x},
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
   
   $('#StageContractorId').on('change', function() {
   var ehs = $('#StageContractorId :selected').val();
   $.ajax({
        url: 'obtener_ehs',
        data: { 'ehs' : ehs},
        type: "post",
        cache: false,
        success: function (data) {
            $('#obtener_ehs').html(data);
   
            
        },
        error: function (xhr, ajaxOptions, thrownError) {
           alert('mal')
        }
    });
   
   });
   
   $(document).ready(function() {
   $('#enviar').click(function() {
       var data = $("#wizardForm").serializeArray();
       $.ajax({
               type : 'POST',
               url  : 'anadir',
               data : data,
             success :  function(data){
               alert('Se han confirmado las generalidades, no podrá hacer cambios hasta terminar el permiso. De clic en siguiente');
               var id = $('#generalidades').html(data);
                $("#enviar").hide();
                 $("#escondido").show();
   
             }
       });
       return false;
   });
   
    $('#StepCingenieria').on('change', function() {
   
         if($('#StepCingenieria').val() == 4) {
             $('.cual').show();

                $('#nousar').hide();
         } else {
             $('.cual').hide();
             $('#nousar').show();
         } 
   
         
         });
   
    $('#StepCprocedimientos').on('change', function() {
       if($('#StepCprocedimientos').val() == 3) {
             $('.proc').show(); 
         } else {
             $('.proc').hide(); 
         }
     });
   
    $('#StepRiskId').on('change', function() {
         var riesgo = $('#StepRiskId :selected').val();
         $.ajax({
             url: 'opciones',
             data: { 'riesgo' : riesgo},
             type: "post",
             cache: false,
             success: function (data) {
               $(".escondido").show();
                 $('#obtener_riesgo').html(data);
               },
             error: function (xhr, ajaxOptions, thrownError) {
             alert('mal')
        }
    });
         });
   
     $('#enviar_paso').click(function() {
          var datos = $("#StepAddForm").serialize();
          $.ajax({
                  type : 'POST',
                  url: '/6/stages/etapas',
                  data : datos,
                success :  function(data){
                  alert('Se han confirmado las generalidades, no podrá hacer cambios hasta terminar el permiso.');
                  // $("#StepAddForm").reset();
                  $('#myLargeModalLabel').modal('toggle');
                  $('#etapas').html(data);
                  $("#enviar").hide();
   
                  
                }
          });
          return false;
      });
   });
   
   
   
   $(document).ready(function(){
             $('#calcular').click(function(){

               var p = parseInt($('#StageProbabilidad :selected').val());
               var s = parseInt($('#StageSeveridad :selected').val());
               var riesgo = p*s;

               var ingenieria = parseInt($('#StepCingenieria :selected').val());
               var procedimientos = parseInt($('#StepCprocedimientos :selected').val());


               if($('#StepJobId').val()){
                  var permiso = 2;
                  } else {
                  var permiso = 0;
                } 

               if($('#StepGear').val()){
                  var equipo = 1;
                  } else {
                  var equipo = 0;
                }
               
               var controles = ingenieria + procedimientos + permiso + equipo;
               var grado_peligrosidad = riesgo - controles;
               alert(p);
               alert(s);
               alert(riesgo);
               alert(ingenieria);
               alert(procedimientos);
               alert(permiso);
               alert(equipo);
               alert(grado_peligrosidad);
               
   
             });
         });
   
   
   
   
   
   
</script>