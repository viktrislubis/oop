<?php

require_once("animal.php");
class Ape extends animal
{
  public $kaki = 2;

  public function jalan()
  {
    return "Auooo";
  }
}
