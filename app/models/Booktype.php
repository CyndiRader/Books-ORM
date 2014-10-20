<?php

class Booktype extends Eloquent {

  public $timestamps = false;
  
  public function books(){
    return $this->hasMany('Book');
  }
}
