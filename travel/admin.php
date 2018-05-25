<?php
require 'vendor/autoload.php';



$app = new \atk4\ui\App('Админка');
$app->initLayout('Centered');

$crud=$app->layout->add('CRUD');
$crud->setModel(new Places($db));
$crud->menu->addItem('Reload', new \atk4\ui\jsReload($crud));
$crud->addDecorator('places', new \atk4\ui\TableColumn\Link('placelist.php?id={$id}'));


$crud=$app->layout->add('CRUD');
$crud->setModel(new Client($db));
$crud->menu->addItem('Reload', new \atk4\ui\jsReload($crud));
