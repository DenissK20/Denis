<?php
session_start();
require 'vendor/autoload.php';
require 'connection.php';
$app = new \atk4\ui\App('Админка');
$app->initLayout('Centered');
$crud=$app->layout->add('CRUD');
$crud->setModel(new Friends($db));
