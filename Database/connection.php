<?php 
  $cfg = ActiveRecord\Config::instance();
  $cfg->set_model_directory('/App/Models');
  $cfg->set_connections(array('development' =>
'mysql://root:@localhost/system-login'));
 ?>
