<?php echo '<h1>Muchas gracias por tu información. </h1>'; ?>
<p>En cuanto sea aprovado por el personal adecuado se te hará llegar una notificacion via email, para que puedas descargar tu permiso y comenzar a trabajar.</p>

<?php echo $this->Html->link('Vista previa', array('controller' => 'permissions', 'action' => 'view', $bien), array('id' => 'vista')); ?>

<!-- <div id="vistap"></div> -->

// <script type="text/javascript">
// 	$('#vista').click(function() {
// 		var myvar = <?php echo json_encode($bien); ?>;
//          $.ajax({
//                  url: '/6/Permissions/vista_previa/'myvar,
//                	success :  function(data){
//                  $('#vistap').html(data);
                 
  
                 
//                }
//          });
//          return false;
//      });
// </script>