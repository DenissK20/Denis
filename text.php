<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('Добро пожаловать на страницу, уже не понятно чего...');
$app->initLayout('Centered');
$c = $_GET['name'];
$label = $app->add(['Label', $c]);

$c = $_GET['surname'];
$label = $app->add(['Label', $c]);
