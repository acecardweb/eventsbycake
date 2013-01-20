<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
<<<<<<< HEAD
?>

=======

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
>>>>>>> e5b0d39f12f7c4ab99984e20bfa5e68dd40d3b7f
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
<<<<<<< HEAD
=======
		<?php echo $cakeDescription ?>:
>>>>>>> e5b0d39f12f7c4ab99984e20bfa5e68dd40d3b7f
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
<<<<<<< HEAD
		echo $this->Html->css(array('style','bootstrap'));
		echo $this->fetch('meta');
=======

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
>>>>>>> e5b0d39f12f7c4ab99984e20bfa5e68dd40d3b7f
		echo $this->fetch('script');
	?>
</head>
<body>
<<<<<<< HEAD
	<?php echo $this->element('menu_topo'); ?>

	
	<div class="corpo">
			<div class="container">
					<?php echo $this->Session->flash(); ?>
					<?php echo $this->fetch('content'); ?>
			</div>
	</div>
	<hr>
	<div id="footer">
     	<div class="container">
			<?php echo $this->element('footer'); ?>
		</div>
	</div>
=======
	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
>>>>>>> e5b0d39f12f7c4ab99984e20bfa5e68dd40d3b7f
</body>
</html>
