<?php
session_start();
require 'vendor/autoload.php';
$app = new \atk4\ui\App('Проверка');
$app->initLayout('Centered');
$form = $app->layout->add('Form');
$form->addField('password');
$form->model['password'];
$form->onSubmit(function($form) {
  $_SESSION['password']=$form->model['password'];
  If($form->model['password']==123) {
  return new \atk4\ui\jsExpression('document.location = "admin.php"');

} else {
  return new \atk4\ui\jsExpression('document.location = "index.php"');
}


});

/*$a='123';
If($a==$form) {

} else {

} */
