<?php
  require_once 'db.php';
  require_once 'sauce.php';

  $id = $_GET['id'] ?? $_POST['id'];

  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    global $db;

    $line = $db->query('SELECT * FROM sauce WHERE id = ' . $id)->fetchAll();
    $sauce = new Sauce($line[0]['name'], $line[0]['instorage'], new DateTime($line[0]['refilldate']), $line[0]['type'], $line[0]['hotlvl']);
  } else {
    Sauce::delete($id);
    header('Location: index.php');
  }


 ?><!DOCTYPE html>
<html lang="hu" dir="ltr">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <title>Szósz törlése</title>
  </head>
  <body class="bg-dark text-light pb-5">
    <nav class="navbar navbar-light bg-secondary">
      <div class="container-fluid">
        <span class="h1 text-start mt-1">
          <img src="src/img/soy-sauce.png" alt="" width="50" height="50" class="align-text-top">
          Szószvilág
        </span>
        <a class="btn btn-danger" href="index.php">Vissza</a>
      </div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-sm-4 mx-auto my-5">
          <?php echo $sauce->getCard(); ?>
        </div>
      </div>
      <div class="row w-75 mx-auto">
        <div class="col-sm-10">
          <h4>Biztosan ki szeretné törölni ezt a szószt?</h4>
        </div>
        <div class="col-sm-1">
          <a class="btn btn-info" href="index.php">Mégse</a>
        </div>
        <div class="col-sm-1">
          <form method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input class="btn btn-danger" type="submit" name="delete" value="Törlés">
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
