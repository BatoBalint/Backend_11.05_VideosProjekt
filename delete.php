<?php
  require_once 'db.php';
  require_once 'sauce.php';

  $id = $_GET['id'] ?? $_POST['id'];

  if ($_SERVER['REQUEST_METHOD'] === 'GET') {

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
        <div class="col-sm-4">
          
        </div>
      </div>
    </div>
  </body>
</html>
