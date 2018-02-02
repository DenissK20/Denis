<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('Отлично');
$app->initLayout('Centered');
$msg=$app->add(['Message','Превосходно!','type'=>'success','icon'=>'loading thumbs outline up']);
