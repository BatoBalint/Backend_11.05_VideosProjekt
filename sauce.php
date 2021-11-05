<?php
require_once 'db.php';

  class Sauce {
    private $id = 0;
    private $name;
    private $instorage;
    private $refilldate;
    private $type;
    private $hotlvl;

    public function setId($id) { $this->id = $id; }

    public function getName() { return $this->name; }
    public function getInstorage() { return $this->instorage; }
    public function getDate() { return $this->refilldate->format('Y-m-d'); }
    public function getType() { return $this->type; }
    public function getHotlvl() { return $this->hotlvl; }

    public function __construct(string $name, int $instorage, DateTime $refilldate, string $type, int $hotlvl) {
      $this->name = $name;
      $this->instorage = $instorage;
      $this->refilldate = $refilldate;
      $this->type = $type;
      $this->hotlvl = $hotlvl;
    }

    public function getCard() : string {
      $card = '<div class="card">
        <img src="src/img/ketchup.jpg">
        <div class="card-body text-dark">
          <h5 class="card-title">' . mb_strtoupper($this->name) . '</h5>
          <p class="card-text">Utoljára feltöltve: ' . $this->refilldate->format('Y-m-d') . '</p>
          <p class="card-text">Mennyiség: ' . $this->instorage . '</p>
          <p class="card-text">Ízvilág: ' . $this->type . '</p>
          <p class="card-text">Csipőssége: ' . $this->hotlvl . '</p>
          <div class="row">
            <div class="col-sm">
              <form method="get" action="edit.php">
              <input type="hidden" name="id" value="' . $this->id . '">
              <input class="btn btn-info" type="submit" value="Szerkesztés">
              </form>
            </div>
            <div class="col-sm text-end">
              <form method="get" action="delete.php">
              <input type="hidden" name="id" value="' . $this->id . '">
              <input class="btn btn-danger" type="submit" value="Törlés">
              </form>
            </div>
          </div>
        </div>
      </div>';



      return $card;
    }

    public function save() {
      global $db;

      $t = $db->prepare("INSERT INTO `sauce`(`name`, `instorage`, `refilldate`, `type`, `hotlvl`) VALUES (:name, :instorage, :refilldate, :type, :hotlvl)")
              ->execute([':name' => $this->name,
              ':instorage' => $this->instorage,
              ':refilldate' => $this->getDate(),
              ':type' => $this->type,
              ':hotlvl' => $this->hotlvl]);
    }

    public function update(int $id) {
      global $db;

      $t = $db->prepare("UPDATE `sauce` SET `name`=:name,`instorage`=:instorage,`refilldate`=:refilldate,`type`=:type,`hotlvl`=:hotlvl WHERE id = " . $id)
              ->execute([':name' => $this->name,
              ':instorage' => $this->instorage,
              ':refilldate' => $this->getDate(),
              ':type' => $this->type,
              ':hotlvl' => $this->hotlvl]);
    }

    public static function delete($id) {
      global $db;

      $t = $db->prepare('DELETE FROM `sauce` WHERE id = ' . $id)->execute();
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
