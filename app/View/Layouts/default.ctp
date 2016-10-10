<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Permisos de Trabajo Peligroso';
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array("http://fonts.googleapis.com/css?family=Open+Sans:400,300,600", "../assets/plugins/pace-master/themes/blue/pace-theme-flash", "../assets/plugins/uniform/css/uniform.default.min", "../assets/plugins/bootstrap/css/bootstrap.min",  "../assets/plugins/fontawesome/css/font-awesome", "../assets/plugins/line-icons/simple-line-icons", "../assets/plugins/offcanvasmenueffects/css/menu_cornerbox", "../assets/plugins/waves/waves.min", "../assets/plugins/switchery/switchery.min", "../assets/plugins/3d-bold-navigation/css/style", "../assets/plugins/slidepushmenus/css/component", "../assets/css/modern.min", "../assets/css/themes/red", "../assets/css/custom",  "../assets/plugins/waves/waves.min", "../assets/plugins/datatables/css/jquery.datatables.min", "../assets/plugins/datatables/css/jquery.datatables_themeroller", "../assets/plugins/x-editable/bootstrap3-editable/css/bootstrap-editable", "../assets/plugins/bootstrap-datepicker/css/datepicker3", "../assets/plugins/pace-master/themes/blue/pace-theme-flash", "../assets/css/pnotify.custom.min","style"));
		echo $this->Html->script(array("../assets/plugins/jquery/jquery-2.1.4.min", "../assets/plugins/jquery-ui/jquery-ui.min", "../assets/plugins/pace-master/pace.min", "../assets/plugins/jquery-blockui/jquery.blockui", "../assets/plugins/bootstrap/js/bootstrap.min", "../assets/plugins/jquery-slimscroll/jquery.slimscroll.min", "../assets/plugins/switchery/switchery.min", "../assets/plugins/uniform/jquery.uniform.min", "../assets/plugins/offcanvasmenueffects/js/classie", "../assets/plugins/offcanvasmenueffects/js/main", "../assets/plugins/waves/waves.min", "../assets/plugins/3d-bold-navigation/js/main", "../assets/js/modern.min", "../assets/plugins/jquery-mockjax-master/jquery.mockjax", "../assets/plugins/datatables/js/jquery.datatables.min", "../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker", "../assets/js/pages/table-data","../assets/plugins/offcanvasmenueffects/js/snap.svg-min", "../assets/plugins/3d-bold-navigation/js/modernizr", "../assets/plugins/x-editable/bootstrap3-editable/js/bootstrap-editable", "../assets/js/pages/form-wizard", "../assets/plugins/offcanvasmenueffects/js/snap.svg-min", "../assets/plugins/jquery-validation/jquery.validate", "../assets/plugins/pace-master/pace.min", "../assets/plugins/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min", "../assets/js/pnotify.custom.min"));
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		echo $this->Js->writeBuffer(array('cache' => true));
	?>
</head>
<body class="page-header-fixed page-horizontal-bar">
	<script type="text/javascript">
		PNotify.prototype.options.styling = "bootstrap3";
	</script>
		 <?php echo $this->Session->flash(); ?>
		<?php echo $this->element('top-bar'); ?>
		<?php echo $this->element('menu'); ?>
		<div class="page-inner">
                
                    
     <?php echo $this->fetch('content'); ?>
                <div class="page-footer">
                    <p class="no-s">2016 &copy; Nosotros.</p>
                </div>
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
        <script type="text/javascript">
var WEB_ROOT = '<?php echo $this->webroot; ?>';
</script>  

</body>
</html>
