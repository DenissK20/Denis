<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('Загрузка наших мозгов...');
$app->initLayout('Centered');
$button = $app->add('Button');
$button->set('Follower');
$button->icon = 'comment';
$button->link ('https://www.youtube.com');
$button = $app->add('Button');
$button->set('Registration');
$button->icon = 'add user';
$button->link ('https://www.e-klase.lv');
