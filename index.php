<?php
session_start();
require 'config.php';
require 'src/core/Core.php';
require 'src/helpers/autoload.php';


$core = new Core;
$core->start();
