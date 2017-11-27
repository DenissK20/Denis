<?php
require 'vendor/autoload.php';
require 'Cat.php';
$app = new \atk4\ui\App('Приют котов');
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
/*$button = $app->layout->add(['Button','LINK TO THE FIRST FILE']);
$button->link(['text', 'name'=>'Denis', 'surname'=>'Kornienko']);

$button1 = $app->layout->add(['Button', '1']);
$button1->link(['text', 'number'=>'1']);

$button2 = $app->layout->add(['Button', '2']);
$button2->link(['text', 'number'=>'2']);

$button3 = $app->layout->add(['Button', '3']);
$button3->link(['text', 'number'=>'3']);

$text = $app->add(['Text', 'Hello noob! Click on the button!!! Faster!!!']);
$button = $app->layout->add(['Button', 'Start!', 'large purple']);
$button->link(['game', 'min'=>1, 'max'=>100]);*/

$cat1 = new Cat;
$cat1->name='Pups';
$cat1->sex='Boy';
$cat1->age='8';
$cat1->color='Grey';
$label1 = $app->add(['Label', $cat1->name.' '.($cat1->AgeCheck()),'image'->'https://www.google.lv/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwjx_5Heo9rXAhWmHJoKHZwsBx0QjRwIBw&url=http%3A%2F%2Fwww.sunny-cat.ru%2Fplug-e-gallery-v-16808.html&psig=AOvVaw39yCDYsrCLXp6pPdMcIEWx&ust=1511718264131020']);

$cat2 = new Cat;
$cat2->name='Sestra';
$cat2->sex='Girl';
$cat2->age='4';
$cat2->color='Pink';
$label2 = $app->add(['Label', $cat2->name.' '.($cat2->AgeCheck()), 'image'->'https://www.google.lv/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&ved=0ahUKEwi-yOajpNrXAhXiCJoKHV48AnIQjRwIBw&url=http%3A%2F%2Fcat40.ru%2Fkotyata-ishhut-dom-im-vsego-1-5-mesyatsa%2F&psig=AOvVaw3iXIuPOsqeE6cRdFNwIC94&ust=1511718460950060']);

$cat3 = new Cat;
$cat3->name='Attacker';
$cat3->sex='Boy';
$cat3->age='13';
$cat3->color='Red';
$label3 = $app->add(['Label', $cat3->name.' '.($cat3->AgeCheck()), 'image'->'https://www.google.lv/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&ved=0ahUKEwiZ-Iy-pNrXAhXKAJoKHd8MDboQjRwIBw&url=http%3A%2F%2Fwww.happy-bears.org%2F%3Fphotogallery.php%26rus%261&psig=AOvVaw3Jo-_HMga9d6D2wHZXb1MT&ust=1511718508753161']);
