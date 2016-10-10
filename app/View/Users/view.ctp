
<div class="container">
  <div class="page-title">
  <h3>Perfil de usuario</h3>
</div>
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <hr>
      <div class="well">
        <dl class="">
          <div class="row">
            <div class="col-xs-4">
              <dt><?php echo __('Nombre(s)'); ?></dt>
              <dd class="form form-control" disabled>
                <?php echo h($user['User']['fullname']); ?>
                &nbsp;
              </dd>
            </div>
            <div class="col-xs-4">
              <dt><?php echo __('N° IMSS'); ?></dt>
              <dd class="form form-control" disabled>
                <?php echo h($user['User']['imss']); ?>
                &nbsp;
              </dd>
            </div>
            <div class="col-xs-4">
              <dt><?php echo __('Empresa contratista'); ?></dt>
              <dd class="form form-control" disabled>
                <?php echo $this->Html->link($user['Contractor']['nombre'], array('controller' => 'contractors', 'action' => 'view', $user['Contractor']['id'])); ?>
                &nbsp;
              </dd>
            </div>
            
          </div>
          <br>
          <div class="row">
            
            <div class="col-xs-4">
              <dt><?php echo __('Usuario'); ?></dt>
              <dd class="form form-control" disabled>
                <?php echo h($user['User']['username']); ?>
                &nbsp;
              </dd>
            </div>
            <div class="col-xs-4">
              <dt><?php echo __('Rol'); ?></dt>
              <dd class="form form-control" disabled>
                <?php echo h($user['User']['role']); ?>
                &nbsp;
              </dd>
            </div>
            <div class="col-xs-4">
              <dt><?php echo __('Email'); ?></dt>
              <dd class="form form-control" disabled>
                <?php echo h($user['User']['email']); ?>
                &nbsp;
              </dd>
            </div>
            <div class="col-xs-4">
              <dt><?php echo __('Teléfono'); ?></dt>
              <dd class="form form-control" disabled>
                <?php echo h($user['User']['number']); ?>
                &nbsp;
              </dd>
            </div>
          </div>
          <br>
          <br><br>
          <div class="row">
              <div class="col-xs-12">
              <p><?php echo $this->Html->link(__('Editar mi información'), array('action' => 'edit', $user['User']['id']), array('class' => 'btn btn-lg btn-block btn-success')); ?></p>
            </div>

            
        
	</table>



</div>
            </div>
            </div>
 
        </dl>
      </div>
    </div>
  </div>
</div>




<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fullname'); ?></dt>
		<dd>
			<?php echo h($user['User']['fullname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number'); ?></dt>
		<dd>
			<?php echo h($user['User']['number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo h($user['User']['role']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activo'); ?></dt>
		<dd>
			<?php echo h($user['User']['activo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contractor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Contractor']['nombre'], array('controller' => 'contractors', 'action' => 'view', $user['Contractor']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imss'); ?></dt>
		<dd>
			<?php echo h($user['User']['imss']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contractors'), array('controller' => 'contractors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contractor'), array('controller' => 'contractors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Permissions'), array('controller' => 'permissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Permission'), array('controller' => 'permissions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stages'), array('controller' => 'stages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stage'), array('controller' => 'stages', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Permissions'); ?></h3>
	<?php if (!empty($user['Permission'])): ?>
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
	<?php foreach ($user['Permission'] as $permission): ?>
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
	<h3><?php echo __('Related Courses'); ?></h3>
	<?php if (!empty($user['Course'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Job Id'); ?></th>
		<th><?php echo __('Inicio'); ?></th>
		<th><?php echo __('Fin'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Activo'); ?></th>
		<th><?php echo __('Pdf Dir'); ?></th>
		<th><?php echo __('Pdf'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Course'] as $course): ?>
		<tr>
			<td><?php echo $course['id']; ?></td>
			<td><?php echo $course['job_id']; ?></td>
			<td><?php echo $course['inicio']; ?></td>
			<td><?php echo $course['fin']; ?></td>
			<td><?php echo $course['created']; ?></td>
			<td><?php echo $course['modified']; ?></td>
			<td><?php echo $course['activo']; ?></td>
			<td><?php echo $course['pdf_dir']; ?></td>
			<td><?php echo $course['pdf']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'courses', 'action' => 'view', $course['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'courses', 'action' => 'edit', $course['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'courses', 'action' => 'delete', $course['id']), array(), __('Are you sure you want to delete # %s?', $course['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Stages'); ?></h3>
	<?php if (!empty($user['Stage'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Frealizacion'); ?></th>
		<th><?php echo __('Firsup'); ?></th>
		<th><?php echo __('Firehs'); ?></th>
		<th><?php echo __('Firlid'); ?></th>
		<th><?php echo __('Activo'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Contractor Id'); ?></th>
		<th><?php echo __('Supcontr'); ?></th>
		<th><?php echo __('Supehs'); ?></th>
		<th><?php echo __('Supemp'); ?></th>
		<th><?php echo __('Trareal'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Notas'); ?></th>
		<th><?php echo __('Ubicacion'); ?></th>
		<th><?php echo __('Area Id'); ?></th>
		<th><?php echo __('Fejecucion'); ?></th>
		<th><?php echo __('Area'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Stage'] as $stage): ?>
		<tr>
			<td><?php echo $stage['id']; ?></td>
			<td><?php echo $stage['frealizacion']; ?></td>
			<td><?php echo $stage['firsup']; ?></td>
			<td><?php echo $stage['firehs']; ?></td>
			<td><?php echo $stage['firlid']; ?></td>
			<td><?php echo $stage['activo']; ?></td>
			<td><?php echo $stage['created']; ?></td>
			<td><?php echo $stage['modified']; ?></td>
			<td><?php echo $stage['contractor_id']; ?></td>
			<td><?php echo $stage['supcontr']; ?></td>
			<td><?php echo $stage['supehs']; ?></td>
			<td><?php echo $stage['supemp']; ?></td>
			<td><?php echo $stage['trareal']; ?></td>
			<td><?php echo $stage['descripcion']; ?></td>
			<td><?php echo $stage['notas']; ?></td>
			<td><?php echo $stage['ubicacion']; ?></td>
			<td><?php echo $stage['area_id']; ?></td>
			<td><?php echo $stage['fejecucion']; ?></td>
			<td><?php echo $stage['area']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'stages', 'action' => 'view', $stage['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'stages', 'action' => 'edit', $stage['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'stages', 'action' => 'delete', $stage['id']), array(), __('Are you sure you want to delete # %s?', $stage['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Stage'), array('controller' => 'stages', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
