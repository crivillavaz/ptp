<style type="text/css">
  .datagrid table { border-collapse: collapse; text-align: left; width: 100%; } .datagrid {font: normal 12px/150% Arial, Helvetica, sans-serif; background: #fff; overflow: hidden; border: 1px solid #006699; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; }.datagrid table td, .datagrid table th { padding: 3px 10px; }.datagrid table thead th {background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #006699), color-stop(1, #00557F) );background:-moz-linear-gradient( center top, #006699 5%, #00557F 100% );filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#006699', endColorstr='#00557F');background-color:#006699; color:#ffffff; font-size: 15px; font-weight: bold; border-left: 1px solid #0070A8; } .datagrid table thead th:first-child { border: none; }.datagrid table tbody td { color: #00496B; border-left: 1px solid #E1EEF4;font-size: 12px;font-weight: normal; }.datagrid table tbody .alt td { background: #E1EEF4; color: #00496B; }.datagrid table tbody td:first-child { border-left: none; }.datagrid table tbody tr:last-child td { border-bottom: none; }.datagrid table tfoot td div { border-top: 1px solid #006699;background: #E1EEF4;} .datagrid table tfoot td { padding: 0; font-size: 12px } .datagrid table tfoot td div{ padding: 2px; }.datagrid table tfoot td ul { margin: 0; padding:0; list-style: none; text-align: right; }.datagrid table tfoot  li { display: inline; }.datagrid table tfoot li a { text-decoration: none; display: inline-block;  padding: 2px 8px; margin: 1px;color: #FFFFFF;border: 1px solid #006699;-webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #006699), color-stop(1, #00557F) );background:-moz-linear-gradient( center top, #006699 5%, #00557F 100% );filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#006699', endColorstr='#00557F');background-color:#006699; }.datagrid table tfoot ul.active, .datagrid table tfoot ul a:hover { text-decoration: none;border-color: #006699; color: #FFFFFF; background: none; background-color:#00557F;}div.dhtmlx_window_active, div.dhx_modal_cover_dv { position: fixed !important; }
</style>
<div class="page-title">
  <p>logo</p>
  <h3>PERMISO DE TRABAJO </h3>
</div>
<div class="datagrid">
<div id="main-wrapper">
<div class="panel panel-white">
<div class="panel-body">
<div class="permissions view">
  <div class="form-group col-md-4">
    <div class="datagrid">
        <table class="table">
        <thead>
          <tr>
            <th>Folio</th>
            <th>Fecha</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>100<?php echo $permission['Permission']['id'] ?></td>
            <td>14/07/2016</td>
          </tr>
        </tbody>
      </table>
      <table>
        <thead>
          <tr>
            <th>Tipo de Trabajo</th>
            <th>Contratista</th>
             <th>Área</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?php echo $permission['Job']['nombre'] ?></td>
            <td><?php echo $permission['Contractor']['nombre'] ?></td>
            <td><?php echo $permission['Area']['nombre'] ?></td>
            
          </tr>
        </tbody>
      </table>
      <table>
        <thead>
          <tr>
            
            <th>Trabajo a Realizar</th>
            <th>Ubicación</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?php echo $permission['Permission']['trabreal'] ?></td>
            <td><?php echo $permission['Permission']['ubicacion'] ?></td>
          </tr>
        </tbody>
      </table>
      <table>
        <thead>
          <tr>
            
            <th>Supervisor</th>
            <th>Lider de proyecto</th>
            <th>Responsable del Area</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?php echo $permission['Permission']['supemp'] ?></td>
            <td><?php echo $permission['Permission']['supcontr'] ?></td>
            <td><?php echo $permission['Permission']['supare'] ?></td>
          </tr>
        </tbody>
      </table>
      <table>
        <thead>
          <tr>
            
            <th>Descripción</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?php echo $permission['Permission']['descripcion'] ?></td>
          </tr>
        </tbody>
      </table>
       <table>
        <thead>
          <tr>
            
            <th>Quien Realiza el Trabajo</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?php if (!empty($permission['Risk'])): ?>
      <?php foreach ($permission['User'] as $worker): ?>
      <?php echo $worker['fullname'].'<br/>' ?>
      <?php endforeach; ?>
      <?php endif; ?></td>
          </tr>
        </tbody>
      </table>
       <table>
        <thead>
          <tr>
            
            <th>Riesgos a Considerar</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?php if (!empty($permission['Risk'])): ?>
     
      <?php foreach ($permission['Risk'] as $risk): ?>
      <?php echo $risk['nombre'].'<br/>' ?>
      <?php endforeach; ?>
      <?php endif; ?></td>
          </tr>
        </tbody>
      </table>
           <table>
        <thead>
          <tr>
            
            <th>Recomendaciones</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td> <?php if (!empty($permission['Rule'])): ?>
   
      <?php foreach ($permission['Rule'] as $rule): ?>
     <?php echo $rule['nombre'].'<br/>' ?>
      <?php endforeach; ?>
      <?php endif; ?></td>
          </tr>
        </tbody>
      </table><br /><br /><br />
      <label>Autorizacion del permiso</label>
           <table>
            
        <thead>
          <tr>
            
            <th>Responsable del trabajo</th>
            <th>Supervisor Contratista</th>
            <th>Responsable de área afectada</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><br /><br />_________________ <br />Nombre y firma</td>
            <td><br /><br />___________ <br />Nombre y firma</td>
            <td> <br /><br />____________<br />Nombre y firma</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</div>
</div>
