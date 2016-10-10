<div class="page-title">
  <h3>Cursos / capacitaciones </h3>
</div>
<div id="main-wrapper">
  <div class="panel panel-white">
    <div class="panel-body">
      <?php echo $this->Html->link('nuevo', array('controller' => 'courses', 'action' => 'add'), array("class" => 'btn btn-success m-b-sm')) ?>
      <div class="table-responsive">
        <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
          <thead>
            <tr>
              <!-- <th><?php // echo $this->Paginator->sort('id'); ?></th> -->
              <th>Trabajadores</th>
              <th><?php echo $this->Paginator->sort('job_id'); ?></th>
              <th><?php echo $this->Paginator->sort('fin', 'La validez del curso vence'); ?></th>
              <th><?php echo $this->Paginator->sort('activo'); ?></th>
              <th><?php echo $this->Paginator->sort('pdf'); ?></th>
              <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($courses as $course): ?>
            <tr>
              <!-- <td><?php //echo h($course['Course']['id']); ?>&nbsp;</td> -->
              <td> <?php echo h($course['User']['fullname']); ?>&nbsp; </td>
              <td>
                <?php echo $course['Job']['nombre']; ?>
              </td>
              <td><?php echo h($this->Time->nice($course['Course']['fin'])); ?>&nbsp;</td>
              <td>
                <?php if($course['Course']['activo'] == true){ ?>
                <div class="ios-switch switch-md"><?php echo $this->Form->input('', array('class' => 'js-switch fixed-header-check', 'type' => 'checkbox', 'checked'=>'checked', 'disabled' => 'disabled' )) ?>&nbsp;</div>
                <?php }
                  else{
                      ?> 
                <div class="ios-switch switch-md"><?php echo $this->Form->input('', array('class' => 'js-switch fixed-header-check', 'type' => 'checkbox', 'checked'=> false, 'disabled' => 'disabled' )) ?>&nbsp;</div>
                <?php } ?>
              </td>
              <td><?php echo $this->Html->link(__('<i class="fa fa-file-pdf-o"></i>'.'&nbsp; '.$course['Course']['id'].' Imprimir '), '../files/course/pdf/'.$course['Course']['pdf_dir'] .'/'.$course['Course']['pdf'], array('escape' => false, 'class' => 'btn btn-success', 'download' => true)); ?></td>
              <td class="actions">
                <?php echo $this->Html->link(__('Ver'), array('action' => 'view', $course['Course']['id']), array('class' => 'btn  btn-info')); ?>
                <?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $course['Course']['id']), array('class' => 'btn  btn-primary')); ?>
                <?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $course['Course']['id']), array('class' => 'btn  btn-danger'), __('Estás seguro que quieres eliminar el curso %s?', $course['Course']['id'])); ?>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
