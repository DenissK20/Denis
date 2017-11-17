<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('Угадаем твоё число!');
$app->initLayout('Centered');
/*$c = $_GET['name'];
$h = $_GET['surname'];
$label = $app->add(['Label', $c.' '.$h]);
$a = $_GET['number'];
$label = $app->add(['Label', $a ,'massive blue']);*/
$min = $_GET['min'];
$max = $_GET['max'];

If ($max-$min==1){
  $text = $app->add(['Text', 'Oh no, Error!']);
  $button = $app->layout->add(['Button', 'Try again', 'medium green']);
  $button->link(['index']);
} else {

  $mid = round(($min+$max)/2);
  $label = $app->add(['Label', $mid, 'medium blue']);

  $button1 = $app->layout->add(['Button', 'Моё число больше']);
  $button1->link(['game', 'min'=>$mid, 'max'=>$max]);

  $button2 = $app->layout->add(['Button', 'Моё число меньше']);
  $button2->link(['game', 'min'=>$min, 'max'=>$mid]);

  $button3 = $app->layout->add(['Button', 'Это моё число', 'big red']);
  $button3->link(['wiin']);
       }
