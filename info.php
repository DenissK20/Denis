<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('Ошибка');
$app->initLayout('Centered');
$msg=$app->add(['Message','У Вас много друзей!!!','type'=>'info', 'icon'=>'loading info circle']);
