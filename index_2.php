<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('Добро пожаловать на новый сайт!');
$app->initLayout('Centered');
$button=$app->add(['Button','Back','medium teal','iconLeft'=>'left arrow','http://mysecondwork.herokuapp.com']);
