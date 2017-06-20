<?php 
ini_set ('display_errors',1);
session_start();

require 'vendor/autoload.php';
require 'Database/connection.php';
require 'Includes/login.php';

  $pass = new App\Classes\Password;
  //$senha = $pass->hash('123');
  //dump($senha);
  
?>
