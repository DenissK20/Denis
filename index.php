<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('Магазин');
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
$button->link(['game', 'min'=>1, 'max'=>100]);

$cat1 = new Cat;
$cat1->name='Pups';
$cat1->sex='Boy';
$cat1->age='8';
$cat1->color='Grey';
$label1 = $app->add(['Label', $cat1->name.' '.($cat1->AgeCheck()),'image'=>'http://doskapozorakomi.ru/uploads/posts/2015-07/1437468703_image.jpg']);

$cat2 = new Cat;
$cat2->name='Sestra';
$cat2->sex='Girl';
$cat2->age='4';
$cat2->color='Pink';
$label2 = $app->add(['Label', $cat2->name.' '.($cat2->AgeCheck()),  'image'=>'http://club-pets.com/profile/obj/1039/board/1449/1449-4646b.jpg']);

$cat3 = new Cat;
$cat3->name='Attacker';
$cat3->sex='Boy';
$cat3->age='13';
$cat3->color='Red';
$label3 = $app->add(['Label', $cat3->name.' '.($cat3->AgeCheck()), 'image'=>'http://www.happy-bears.org/gallery/expos/Happy%20Bears%20Axel%20Golden%20Boy.%20Chisinau%2013-04-2013_669_ny11_62348.jpg']);

$button1 = $app->layout->add(['Button', '1kg']);
$button1->link(['index','weight'=>'1']);

$button2 = $app->layout->add(['Button', '2kg']);
$button2->link(['index','weight'=>'2']);

$button3 = $app->layout->add(['Button', '3kg']);
$button3->link(['index','weight'=>'3']);

$button4 = $app->layout->add(['Button', '4kg']);
$button4->link(['index','weight'=>'4']);

$button5 = $app->layout->add(['Button', '5kg']);
$button5->link(['index','weight'=>'5']);

$weight = $_GET['weight'];

$laima1 = new Laima;
$laima1->name='Vaverīte';
$laima1->price=7;
$laima1->color='green';
$total = $laima1->AllPrice($weight);
$label1 = $app->add(['Label', $laima1->name.' '. $total, $laima1->color.' massive', 'detail'=>'Cena par kg '. $laima1->price, 'image'=>'http://www.laima.lv/wp-content/uploads/2016/05/4750001311662_V-VER-TE-2kg-konf-300x191.jpg']);

$laima2 = new Laima;
$laima2->name='Lukss';
$laima2->price=9;
$laima2->color='red';
$total = $laima2->AllPrice($weight);
$label2 = $app->add(['Label', $laima2->name.' '. $total, $laima2->color.' massive', 'detail'=>'Cena par kg '. $laima2->price, 'image'=>'https://nuko.lv/media/catalog/product/cache/1/image/480x740/9df78eab33525d08d6e5fb8d27136e95/0/0/00855201.jpg']);

$laima3 = new Laima;
$laima3->name='Lacīši';
$laima3->price=5;
$laima3->color='teal';
$total = $laima3->AllPrice($weight);
$label3 = $app->add(['Label', $laima3->name.' '. $total, $laima3->color.' massive', 'detail'=>'Cena par kg '. $laima3->price, 'image'=>'http://www.ekspobirojs.lv/Attachment/NomPicture/18224_1000x1000.jpg']);

$laima4 = new Laima;
$laima4->name='Serenāde';
$laima4->price=8;
$laima4->color='blue';
$total = $laima4->AllPrice($weight);
$label4 = $app->add(['Label', $laima4->name.' '. $total, $laima4->color.' massive', 'detail'=>'Cena par kg '. $laima4->price, 'image'=>'https://www.birojs.lv/global/uploads/images/products/8-02-003.bg.jpg']);

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
$grid=$app->layout->add('Grid');
$grid->setModel(new Friends($db));

$crud=$app->layout->add('CRUD');
$crud->setModel(new Friends($db));*/
$menu=$app->add('Menu');
$clothes=$menu->addMenu('Clothes');
$clothes->addItem('Shirts');
$clothes->addItem('Shoes');
$clothes->addItem('Pants');
$clothes->addItem('Hats');
$clothes->addItem('Gloves');
$electronics=$menu->addMenu('Electronics');
$electronics->addItem('Phone');
$computers=$electronics->addMenu('Computer');
$computers->addItem('Computer');
$computers->addItem('Power Suppy');
$computers->addItem('case');
$computers->addItem('CPU');
$computers->addItem('CPU Cooler');
$computers->addItem('Ram');
$computers->addItem('HDD');
$computers->addItem('SSD');
$computers->addItem('GPU');
$computers->addItem('Motherboard');
$computers->addItem('Modem');
$computers->addItem('Drive');
$computers->addItem('Sound card');
$computers->addItem('Cables');
$electronics->addItem('Mp3 player');
$electronics->addItem('Calculator');
$electronics->addItem('Speaker');
$toys=$menu->addMenu('Toys');
$toys->addItem('Mini car');
$toys->addItem('Mini phone');
$toys->addItem('Mini kitchen');
$toys->addItem('Mini cubes');
$toys->addItem('Mini house');