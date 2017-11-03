<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('Добро пожаловать на страницу, уже не понятно чего...');
$app->initLayout('Centered');
/*$button = $app->add('Button');
$button->set('My chess site');
$button->addClass('massive grey');
$button->icon = 'delicious';
$button->link ('http://deniskariga.wixsite.com/chess-lessons-free');
$button = $app->add('Button');
$button->set('Registration');
$button->addClass('big yellow');
$button->icon = 'add user';
$button->link ('https://www.e-klase.lv');
$button = $app->add('Button');
$button->set('Follower');
$button->addClass('large violet');
$button->icon = 'plus';
$button->link ('https://www.youtube.com');
$button = $app->add('Button');
$button->set('Android site');
$button->addClass('large green');
$button->icon = 'android';
$button->link ('https://www.android.com');
$button = $app->add('Button');
$button->set('My web site');
$button->addClass('large purple');
$button->icon = 'browser';
$button->link ('http://mysecondwork.herokuapp.com');
$button=$app->add(['Button','New','medium teal','iconRight'=>'right arrow',]);
$label = $app->add(['Label', 'Book','medium red','icon'=>'book']);
$label = $app->add(['Label', 'Book','medium red','image'=>'http://greetingbooks.com/wp-content/uploads/2015/08/3.png']);
$text = $app->add(['Text', 'My book...']);
$a=0;
if ($a!=0) {
  $name = 'Верно!';
  $pref = 'massive blue';
  $img = 'https://st.depositphotos.com/2931363/4881/i/950/depositphotos_48814037-stock-photo-happy-man-in-shirt-talking.jpg';
} else {
  $name = 'Неверно!';
  $pref = 'small black';
  $img = 'https://st2.depositphotos.com/1115531/5548/i/950/depositphotos_55488945-stock-photo-portrait-one-sad-man-standing.jpg';
}
$label = $app->add(['Label', $name, $pref]);
$image = $app->add(['Image', $img]);*/
$button = $app->layout->add(['Button','LINK TO THE FIRST FILE']);
$button->link(['text', 'name'=>'Denis', 'surname'=>'Kornienko']);
