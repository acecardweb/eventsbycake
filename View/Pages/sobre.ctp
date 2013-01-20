<<<<<<< HEAD
<h1>Participe do Assando Sites!</h1>
<img class="img-polaroid" src="http://cakephp.org/img/logo/cakephp_logo_125_trans.png" alt="Venha assar o seu">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum..</p>
<p><a href="../evento/localizacao" class="btn btn-primary btn-success">Localização</a></p>	


=======
<?php
		$filePresent = null;
		if (file_exists(APP . 'Config' . DS . 'database.php')):
			echo '<span class="notice success">';
				echo __d('cake_dev', 'Your database configuration file is present.');
				$filePresent = true;
			echo '</span>';
		else:
			echo '<span class="notice">';
				echo __d('cake_dev', 'Your database configuration file is NOT present.');
				echo '<br/>';
				echo __d('cake_dev', 'Rename APP/Config/database.php.default to APP/Config/database.php');
			echo '</span>';
		endif;
	?>
>>>>>>> e5b0d39f12f7c4ab99984e20bfa5e68dd40d3b7f
