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

$cakeDescription = ("Permisos de Trabajo Peligrosos");
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

		echo $this->Html->css(array("http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700", "../assets/plugins/pace-master/themes/blue/pace-theme-flash", "../assets/plugins/uniform/css/uniform.default.min", "../assets/plugins/bootstrap/css/bootstrap.min", "../assets/plugins/fontawesome/css/font-awesome", "../assets/plugins/line-icons/simple-line-icons", "../assets/plugins/waves/waves.min", "../assets/plugins/switchery/switchery.min", "../assets/plugins/3d-bold-navigation/css/style", "../assets/css/modern.min", "../assets/css/custom"));
		echo $this->Html->script(array( "../assets/plugins/3d-bold-navigation/js/modernizr", "../assets/plugins/jquery/jquery-2.1.4.min", "../assets/plugins/jquery-ui/jquery-ui.min", "../assets/plugins/pace-master/pace.min", "../assets/plugins/jquery-blockui/jquery.blockui", "../assets/plugins/bootstrap/js/bootstrap.min", "../assets/plugins/jquery-slimscroll/jquery.slimscroll.min", "../assets/plugins/switchery/switchery.min", "../assets/plugins/uniform/jquery.uniform.min", "../assets/plugins/classie/classie", "../assets/plugins/waves/waves.min", "../assets/js/modern.min"));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body class="page-login">

	<main class="page-content">
            <div class="page-inner">
                <div id="main-wrapper">
                	
                    <div class="row">
                        <div class="col-md-3 center">
                            <div class="login-box">

                                <?php echo $this->Session->flash(); ?>
                                <?php echo $this->fetch('content'); ?>
                                
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
		
        
	 
</body>
</html>
