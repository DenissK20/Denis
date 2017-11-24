<?php
Class Cat {
  public $name;
  public $sex;
  public $age;
  public $color =  'Black' ;
  public function AgeCheck() {
    If ($this->age<12){
      return $answer = 'Годен!';
    } else {
      return $answer = 'Негоден!';
    }
  }
  }
