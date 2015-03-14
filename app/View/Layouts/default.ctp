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

$cakeDescription = __d('cake_dev', 'IT Inventory System');
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

		echo $this->Html->css('bootstrap');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div class="container">
            <div class="page-header">
			<h2 class="header-content"><?php echo $this->Html->link($cakeDescription, ''); ?></h2>
                         
                        <div>
            
                        </div> </div>
            
            
            
                     <ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="/itinventory/categories">Home</a></li>
  <li role="presentation"><a href="/itinventory/categories">Category</a></li>
  <li role="presentation"><a href="itinventory/users">Users</a></li>
</ul>
            
            
            
            
            
            
            
            
            
            
            
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		
<footer>
                <address>&copy; Copyright 2015 All Rights Reserved.<br> IT Club- Deerwalk Institute of Technology</address>
</footer>
	</div>
	
</body>
</html>
       