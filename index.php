<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('Добро пожаловать на страницу ссылок!');
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
$button=$app->add(['Button','New','medium teal','iconRight'=>'right arrow',]);*/
$label = $app->add(['Label', 'Book','medium red','icon'=>'book']);
$label = $app->add(['Label', 'Book','medium red','image'=>'http://greetingbooks.com/wp-content/uploads/2015/08/3.png']);
$text = $app->add(['Text', 'My book...']);
$a=1;
if ($a==0) {
  $name = 'Верно!';
}else{
  $name = 'Неверно!';
}
$label = $app->add(['Label', $name]);
