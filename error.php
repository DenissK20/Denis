<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('Ошибка');
$app->initLayout('Centered');
$msg=$app->add(['Message','Подождите несколько лет!','type'=>'error','icon'=>'loading warning sign']);