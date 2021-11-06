<?php
  require_once 'sauce.php';
  require 'db.php';

  global $db;

  $id = $_GET['id'] ?? $_POST['id'];

  $line = $db->query('SELECT * FROM `sauce` WHERE `id` = ' . $id)->fetchAll();

  $sauce = new Sauce($line[0]['name'], $line[0]['instorage'], new DateTime($line[0]['refilldate']), $line[0]['type'], $line[0]['hotlvl']);

  $methodGet = true;
  $nameError = true;
  $typeError = true;
  $hotlvlError = true;

  $name = $_POST['name'] ?? $sauce->getName();
  $type = $_POST['type'] ?? $sauce->getType();
  $hotlvl = $_POST['hotlvl'] ?? $sauce->getHotlvl();
  $instorage = $_POST['instorage'] ?? $sauce->getInstorage();
  $refilldate = $_POST['refilldate'] ?? $sauce->getDate();

  if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if ($name !== '') {
      $nameError = false;
    }

    if ($type !== '') {
      $typeError = false;
    }

    if ($hotlvl !== '') {
      $hotlvlError = false;
    }

    if (!$nameError && !$typeError && !$hotlvlError) {
      $newSauce = new Sauce($name, $instorage, new DateTime($refilldate), $type, $hotlvl);
      $newSauce->update($id);
      header('Location: index.php');
    }
  }


 ?><!DOCTYPE html>
<html lang="hu" dir="ltr">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="main.js" charset="utf-8"></script>
    <meta charset="utf-8">
    <title>Szósz szerkesztése</title>
  </head>
  <body class="bg-dark text-light">
    <div class="">
      <nav class="navbar navbar-light bg-secondary">
        <div class="container-fluid">
          <span class="h1 text-start mt-1">
            <img src="src/img/soy-sauce.png" alt="" width="50" height="50" class="align-text-top">
            Szószvilág
          </span>
          <a class="btn btn-danger" href="index.php">Vissza</a>
        </div>
      </nav>
    </div>
    <div class="container">
      <div class="row pt-5">
        <div class="col-sm-8 mx-auto">
          <form method="post">
            <input type="hidden" name="" value="<?php echo $id; ?>">
            <div class="mb-3">
              <label class="form-label">Szósz neve <?php if (!$methodGet && $nameError) { echo '<span class="errorMessage">Nem lehet üres a név mező</span>'; } ?></label>
              <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
            </div>
            <div class="mb-3">
              <label class="form-label">Mennyiség a raktárban</label>
              <input type="number" class="form-control" name="instorage" value="<?php echo $instorage; ?>">
            </div>
            <div class="mb-3">
              <label class="form-label">Mikor volt feltöltve</label>
              <input type="date" class="form-control" name="refilldate" value="<?php echo $refilldate; ?>">
            </div>
            <div class="mb-3">
              <label class="form-label">Ízvilág <?php if (!$methodGet && $typeError) { echo '<span class="errorMessage">Nem lehet üres az ízvilág mező</span>'; } ?></label>
              <input type="text" class="form-control" name="type" value="<?php echo $type; ?>">
            </div>
            <div class="mb-5">
              <label class="form-label">Csípősségi szint (0-5) <?php if (!$methodGet && $hotlvlError) { echo '<span class="errorMessage">Nem lehet üres a csípősségi szint mező</span>'; } ?></label>
              <input type="number" id="hotLvlInput" class="form-control" min="0" max="5" name="hotlvl" value="<?php echo $hotlvl; ?>">
            </div>
            <button type="submit" class="btn btn-success">Szerkesztés</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
