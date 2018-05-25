<?php
require 'vendor/autoload.php';
require 'app.php';

$grid=$app->layout->add('Grid');
$grid->setModel(new Places($db));
