<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('You WIN!!!');
$app->initLayout('Centered');
$button = $app->layout->add(['Button', 'Main', 'medium teal' ]);
$button->link(['index']);
