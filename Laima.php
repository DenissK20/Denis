<?php
Class Laima {
  public $name;
  public $price;
  public $color;
  public function PriceCheck() {
    If($this->price<=7) {
      return $answer = 'Дешёвые';
    } else {
      return $answer = 'Дорогие';
    }
  }
}
