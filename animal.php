<?php

class animal
{
  public $kaki = 4;
  public $merk;
  public $cold_blooded = "no";

  public function __construct($name)
  {
    $this->merk = $name;
  }
}
