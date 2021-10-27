<?php 
session_start();
require 'config.php';
require 'helpers/autoload.php';


$core = new Core;
$core->start();