<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('Загрузка наших мозгов...');
$app->initLayout('Centered');
$button = $app->add('Button');
$button->set('My chess site');
$button->addClass('massive grey');
$button->icon = 'delicious';
$button->link ('http://deniskariga.wixsite.com/chess-lessons-free');
$button = $app->add('Button');
$button->set('Registration');
$button->addClass('big yellow');
$button->icon = 'add user';
$button->link ('https://www.e-klase.lv');
$button = $app->add('Button');
$button->set('Follower');
$button->addClass('large violet');
$button->icon = 'plus';
$button->link ('https://www.youtube.com');
$button = $app->add('Button');
$button->set('Android site');
$button->addClass('big green');
$button->icon = 'android';
$button->link ('https://www.android.com');
$button = $app->add('Button');
$button->set('My web site');
$button->addClass('massive purple');
$button->icon = 'browser';
$button->link ('http://mysecondwork.herokuapp.com');
$button=$app->add(['Button','Next','iconRight'=>'right arrow']);
