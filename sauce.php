<?php
  global $db;

  class Sauce {
    private $name;
    private $instorage;
    private $refilldate;
    private $type;
    private $hotlvl;

    public function __construct(string $name, int $instorage, DateTime $refilldate, string $type, int $hotlvl) {
      $this->name = $name;
      $this->instorage = $instorage;
      $this->refilldate = $refilldate;
      $this->type = $type;
      $this->hotlvl = $hotlvl;
    }


  }


 ?>
