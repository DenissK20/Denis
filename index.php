<?php
require 'vendor/autoload.php';
/*require 'Laima.php';*/
$app = new \atk4\ui\App('Заполните, пожалуйста, анкету!');
$app->initLayout('Centered');
$db = new
\atk4\data\Persistence_SQL('mysql:dbname=fdb;host=localhost','root','');

class Friends extends \atk4\data\Model {
  public $table = 'friends';
  function init() {
    parent::init();
    $this->addField('name');
    $this->addField('surname');
    $this->addField('birthday',['type'=>'date']);
    $this->addField('email');
    $this->addField('phone_number',['default'=>'+371']);
    $this->addField('notes',['type'=>'text']);
  }
}
$form = $app->layout->add('Form');
$form->setModel(new Friends($db));
$form->onSubmit(function($form) {
  $form->model->save();
  return $form->success('Record updated');
});
