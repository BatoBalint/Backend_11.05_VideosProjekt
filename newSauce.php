<?php
  require_once 'sauce.php';

  $methodGet = true;
  $nameError = true;
  $typeError = true;
  $hotlvlError = true;

  $name = '';
  $type = '';
  $hotlvl = '';
  $instorage = '';
  $refilldate = '';

  if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $methodGet = false;

    $name = $_POST['name'];
    if ($name !== '') {
      $nameError = false;
    }

    $type = $_POST['type'];
    if ($type !== '') {
      $typeError = false;
    }

    $hotlvl = $_POST['hotlvl'];
    if ($hotlvl !== '') {
      $hotlvlError = false;
    }

    $instorage = $_POST['instorage'];
    $refilldate = $_POST['refilldate'];

    if (!$nameError && !$typeError && !$hotlvlError) {
      $newSauce = new Sauce($name, $instorage, new DateTime($refilldate), $type, $hotlvl);
      $newSauce->save();
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
    <title>Új szósz felvétele</title>
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
            <button type="submit" class="btn btn-primary">Hozzáadás</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
