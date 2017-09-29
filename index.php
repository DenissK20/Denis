<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('Загрузка наших мозгов...');
$app->initLayout('Centered');
$button = $app->add('Button');
$button->set('Add Invoice');
$button->icon('plus');
