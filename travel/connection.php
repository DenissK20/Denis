<?php
$db = new
\atk4\data\Persistence_SQL('mysql:dbname=fdb;host=localhost','root','');
class Places extends \atk4\data\Model {
  public $table = 'places';
  function init() {
    parent::init();
    $this->addField('name');
  }
}
class Client extends \atk4\data\Model {
  public $table = 'friends';
  function init() {
    parent::init();
    $this->addField('name');
    $this->addField('email');
    $this->addField('phone_number');
    $this->addField('departure_date',['type'=>'date']);
    $this->addField('arrival_date',['type'=>'date']);
  }
}
