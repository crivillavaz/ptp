<a href="index.html" class="logo-name text-lg text-center">PTP</a>
                                <p class="text-center m-t-md">Permisos de Trabajo Peligroso <br/ > Por favor inicia sesión en el sistema</p>
<?php echo $this->Form->create('User', array('class' => 'm-t-md')); ?>
               <span id="reauth-email" class="reauth-email"></span>
               <div class="form-group">
               		<?php echo $this->Form->input('username', array('label' => false, 'class' => 'form-control',  'placeholder' => 'Usuario'), 'required'); ?>
               </div>
               <div class="form-group">
               	<?php echo $this->Form->input('password', array('label' => false, 'class' => 'form-control', 'placeholder' => 'Contraseña')); ?>
				</div>
               
               <?php echo $this->Form->button('Entrar', array('class' => 'btn btn-info btn-block')); ?>
               <?php echo $this->Form->end(); ?>
               <br/>
              
                                    <a href="forgot.html" class="display-block text-center m-t-md text-sm">Olvidaste tu contraseña?</a>
                                    <p class="text-center m-t-xs text-sm">aún no tienes cuenta?</p>
                                <p class="text-center m-t-xs text-sm">2016 &copy; Nosotros.</p>


                                    