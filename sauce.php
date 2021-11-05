<?php

  class Sauce {
    private $id = 0;
    private $name;
    private $instorage;
    private $refilldate;
    private $type;
    private $hotlvl;

    public function setId($id) { $this->id = $id; }

    public function getName() { return $this->name; }

    public function __construct(string $name, int $instorage, DateTime $refilldate, string $type, int $hotlvl) {
      $this->name = $name;
      $this->instorage = $instorage;
      $this->refilldate = $refilldate;
      $this->type = $type;
      $this->hotlvl = $hotlvl;
    }

    public static function getAll() : array {
      global $db;

      $t = $db->query("SELECT * FROM sauce ORDER BY id ASC")->fetchAll();
      $sauceArray = [];

      foreach ($t as $line) {
        $sauce = new Sauce($line['name'], $line['instorage'], new DateTime($line['refilldate']), $line['type'], $line['hotlvl']);
        $sauce->setId($line['id']);
        $sauceArray[] = $sauce;
      }

      return $sauceArray;
    }

    public function __toString() : string {
      $refill = $this->refilldate->format('Y-m-d');
      return "Nev: $this->name, db: $this->instorage, refill: $refill, type: $this->type, csipos: $this->hotlvl";
    }
  }


 ?>
