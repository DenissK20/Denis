<?php
Class Laima {
  public $name;
  public $price
  public $color;
  public function AllPrice($weight) {
  $answer = $this->price * $weight;
  return $answer;
}
  /*public function PriceCheck() {
    If($this->price<=7) {
      return $answer = 'Дешёвые';
    } else {
      return $answer = 'Дорогие';
    }
  }*/
}
