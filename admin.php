<?php
session_start();
require 'vendor/autoload.php';
require 'connection.php';
If((isset($_SESSION['hach'])) && ($_SESSION['hach']!='iqurhp23riuyfsfdugyozfixdbvkjn58946703jksdfg')) {
  header('Location: error.php');

}

$app = new \atk4\ui\App('Админка');
$app->initLayout('Centered');

$crud=$app->layout->add('CRUD');
$crud->setModel(new Friends($db));

$button = $app->layout->add(['Button', 'Log out', 'purple']);
$button->link(['logout']);
