<div class="container">
   <div class="page-title">
      <h3>Perfil de usuario</h3>
   </div>
</div>
<div class="container">
   <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
         <hr>
         <div class="well">
            <div class="row">

			<dt><?php echo __('Id'); ?></dt>
      <dd>
         <?php echo h($risk['Risk']['id']); ?>
         &nbsp;
      </dd>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="risks view">
   <h2><?php echo __('Riesgo'); ?></h2>
   <dl>
      <dt><?php echo __('Id'); ?></dt>
      <dd>
         <?php echo h($risk['Risk']['id']); ?>
         &nbsp;
      </dd>
      <dt><?php echo __('Nombre'); ?></dt>
      <dd>
         <?php echo h($risk['Risk']['nombre']); ?>
         &nbsp;
      </dd>
      <dt><?php echo __('Created'); ?></dt>
      <dd>
         <?php echo h($risk['Risk']['created']); ?>
         &nbsp;
      </dd>
      <dt><?php echo __('Modified'); ?></dt>
      <dd>
         <?php echo h($risk['Risk']['modified']); ?>
         &nbsp;
      </dd>
      <dt><?php echo __('Job'); ?></dt>
      <dd>
         <?php echo $this->Html->link($risk['Job']['nombre'], array('controller' => 'jobs', 'action' => 'view', $risk['Job']['id'])); ?>
         &nbsp;
      </dd>
   </dl>
</div>
<div class="actions">
   <h3><?php echo __('Actions'); ?></h3>
   <ul>
      <li><?php echo $this->Html->link(__('Edit Risk'), array('action' => 'edit', $risk['Risk']['id'])); ?> </li>
      <li><?php echo $this->Form->postLink(__('Delete Risk'), array('action' => 'delete', $risk['Risk']['id']), array(), __('Are you sure you want to delete # %s?', $risk['Risk']['id'])); ?> </li>
      <li><?php echo $this->Html->link(__('List Risks'), array('action' => 'index')); ?> </li>
      <li><?php echo $this->Html->link(__('New Risk'), array('action' => 'add')); ?> </li>
      <li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
      <li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
      <li><?php echo $this->Html->link(__('List Steps'), array('controller' => 'steps', 'action' => 'index')); ?> </li>
      <li><?php echo $this->Html->link(__('New Step'), array('controller' => 'steps', 'action' => 'add')); ?> </li>
      <li><?php echo $this->Html->link(__('List Permissions'), array('controller' => 'permissions', 'action' => 'index')); ?> </li>
      <li><?php echo $this->Html->link(__('New Permission'), array('controller' => 'permissions', 'action' => 'add')); ?> </li>
      <li><?php echo $this->Html->link(__('List Options'), array('controller' => 'options', 'action' => 'index')); ?> </li>
      <li><?php echo $this->Html->link(__('New Option'), array('controller' => 'options', 'action' => 'add')); ?> </li>
   </ul>
</div>
<div class="related">
   <h3><?php echo __('Related Steps'); ?></h3>
   <?php if (!empty($risk['Step'])): ?>
   <table cellpadding = "0" cellspacing = "0">
      <tr>
         <th><?php echo __('Id'); ?></th>
         <th><?php echo __('Nombre'); ?></th>
         <th><?php echo __('Herramientas'); ?></th>
         <th><?php echo __('Edofco'); ?></th>
         <th><?php echo __('Comentarios'); ?></th>
         <th><?php echo __('Risk Id'); ?></th>
         <th><?php echo __('Provocacion'); ?></th>
         <th><?php echo __('Cingenieria'); ?></th>
         <th><?php echo __('Cprocedimientos'); ?></th>
         <th><?php echo __('Cepp'); ?></th>
         <th><?php echo __('Job Id'); ?></th>
         <th><?php echo __('Stage Id'); ?></th>
         <th><?php echo __('Ccing'); ?></th>
         <th><?php echo __('Ccproc'); ?></th>
         <th><?php echo __('Provpor'); ?></th>
         <th class="actions"><?php echo __('Actions'); ?></th>
      </tr>
      <?php foreach ($risk['Step'] as $step): ?>
      <tr>
         <td><?php echo $step['id']; ?></td>
         <td><?php echo $step['nombre']; ?></td>
         <td><?php echo $step['herramientas']; ?></td>
         <td><?php echo $step['edofco']; ?></td>
         <td><?php echo $step['comentarios']; ?></td>
         <td><?php echo $step['risk_id']; ?></td>
         <td><?php echo $step['provocacion']; ?></td>
         <td><?php echo $step['cingenieria']; ?></td>
         <td><?php echo $step['cprocedimientos']; ?></td>
         <td><?php echo $step['cepp']; ?></td>
         <td><?php echo $step['job_id']; ?></td>
         <td><?php echo $step['stage_id']; ?></td>
         <td><?php echo $step['ccing']; ?></td>
         <td><?php echo $step['ccproc']; ?></td>
         <td><?php echo $step['provpor']; ?></td>
         <td class="actions">
            <?php echo $this->Html->link(__('View'), array('controller' => 'steps', 'action' => 'view', $step['id'])); ?>
            <?php echo $this->Html->link(__('Edit'), array('controller' => 'steps', 'action' => 'edit', $step['id'])); ?>
            <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'steps', 'action' => 'delete', $step['id']), array(), __('Are you sure you want to delete # %s?', $step['id'])); ?>
         </td>
      </tr>
      <?php endforeach; ?>
   </table>
   <?php endif; ?>
   <div class="actions">
      <ul>
         <li><?php echo $this->Html->link(__('New Step'), array('controller' => 'steps', 'action' => 'add')); ?> </li>
      </ul>
   </div>
</div>
<div class="related">
   <h3><?php echo __('Related Permissions'); ?></h3>
   <?php if (!empty($risk['Permission'])): ?>
   <table cellpadding = "0" cellspacing = "0">
      <tr>
         <th><?php echo __('Id'); ?></th>
         <th><?php echo __('Job Id'); ?></th>
         <th><?php echo __('Contractor Id'); ?></th>
         <th><?php echo __('Trabreal'); ?></th>
         <th><?php echo __('Supare'); ?></th>
         <th><?php echo __('Area Id'); ?></th>
         <th><?php echo __('Ubicacion'); ?></th>
         <th><?php echo __('Descripcion'); ?></th>
         <th><?php echo __('Notas'); ?></th>
         <th><?php echo __('Activo'); ?></th>
         <th><?php echo __('Supemp'); ?></th>
         <th><?php echo __('Supcontr'); ?></th>
         <th><?php echo __('Firsup'); ?></th>
         <th><?php echo __('Firadm'); ?></th>
         <th><?php echo __('Firmlid'); ?></th>
         <th><?php echo __('Estatus'); ?></th>
         <th><?php echo __('Firmehs'); ?></th>
         <th><?php echo __('Created'); ?></th>
         <th><?php echo __('Modified'); ?></th>
         <th><?php echo __('Finicio'); ?></th>
         <th><?php echo __('Fin'); ?></th>
         <th class="actions"><?php echo __('Actions'); ?></th>
      </tr>
      <?php foreach ($risk['Permission'] as $permission): ?>
      <tr>
         <td><?php echo $permission['id']; ?></td>
         <td><?php echo $permission['job_id']; ?></td>
         <td><?php echo $permission['contractor_id']; ?></td>
         <td><?php echo $permission['trabreal']; ?></td>
         <td><?php echo $permission['supare']; ?></td>
         <td><?php echo $permission['area_id']; ?></td>
         <td><?php echo $permission['ubicacion']; ?></td>
         <td><?php echo $permission['descripcion']; ?></td>
         <td><?php echo $permission['notas']; ?></td>
         <td><?php echo $permission['activo']; ?></td>
         <td><?php echo $permission['supemp']; ?></td>
         <td><?php echo $permission['supcontr']; ?></td>
         <td><?php echo $permission['firsup']; ?></td>
         <td><?php echo $permission['firadm']; ?></td>
         <td><?php echo $permission['firmlid']; ?></td>
         <td><?php echo $permission['estatus']; ?></td>
         <td><?php echo $permission['firmehs']; ?></td>
         <td><?php echo $permission['created']; ?></td>
         <td><?php echo $permission['modified']; ?></td>
         <td><?php echo $permission['finicio']; ?></td>
         <td><?php echo $permission['fin']; ?></td>
         <td class="actions">
            <?php echo $this->Html->link(__('View'), array('controller' => 'permissions', 'action' => 'view', $permission['id'])); ?>
            <?php echo $this->Html->link(__('Edit'), array('controller' => 'permissions', 'action' => 'edit', $permission['id'])); ?>
            <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'permissions', 'action' => 'delete', $permission['id']), array(), __('Are you sure you want to delete # %s?', $permission['id'])); ?>
         </td>
      </tr>
      <?php endforeach; ?>
   </table>
   <?php endif; ?>
   <div class="actions">
      <ul>
         <li><?php echo $this->Html->link(__('New Permission'), array('controller' => 'permissions', 'action' => 'add')); ?> </li>
      </ul>
   </div>
</div>
<div class="related">
   <h3><?php echo __('Related Options'); ?></h3>
   <?php if (!empty($risk['Option'])): ?>
   <table cellpadding = "0" cellspacing = "0">
      <tr>
         <th><?php echo __('Id'); ?></th>
         <th><?php echo __('Opcion'); ?></th>
         <th class="actions"><?php echo __('Actions'); ?></th>
      </tr>
      <?php foreach ($risk['Option'] as $option): ?>
      <tr>
         <td><?php echo $option['id']; ?></td>
         <td><?php echo $option['opcion']; ?></td>
         <td class="actions">
            <?php echo $this->Html->link(__('View'), array('controller' => 'options', 'action' => 'view', $option['id'])); ?>
            <?php echo $this->Html->link(__('Edit'), array('controller' => 'options', 'action' => 'edit', $option['id'])); ?>
            <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'options', 'action' => 'delete', $option['id']), array(), __('Are you sure you want to delete # %s?', $option['id'])); ?>
         </td>
      </tr>
      <?php endforeach; ?>
   </table>
   <?php endif; ?>
   <div class="actions">
      <ul>
         <li><?php echo $this->Html->link(__('New Option'), array('controller' => 'options', 'action' => 'add')); ?> </li>
      </ul>
   </div>
</div>
