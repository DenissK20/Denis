<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('Загрузка наших мозгов...');
$app->initLayout('Centered');
$button = $app->add('Button');
$button->set('Follower');
$button->icon = 'comment';
$button = $app->add('Button');
$button->set('Registration');
$button->icon = 'add_user';
$button->link ('https://www.e-klase.lv');
