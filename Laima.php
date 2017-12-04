<?php
Class Laima {
  public $name;
  public $price ;
  public $color;
  public function AllPrice($weight) {
  $price = $this->price * $weight;
  return $price;
}
  /*public function PriceCheck() {
    If($this->price<=7) {
      return $answer = 'Дешёвые';
    } else {
      return $answer = 'Дорогие';
    }
  }*/
}
