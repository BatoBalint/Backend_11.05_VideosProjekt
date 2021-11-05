<?php
  require_once 'db.php';
  require_once 'sauce.php';

  $sauceList = Sauce::getAll();

 ?><!DOCTYPE html>
<html lang="hu" dir="ltr">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <title>Szószvilág</title>
  </head>
  <body class="bg-dark text-light">
    <nav class="navbar navbar-light bg-secondary">
      <div class="container-fluid">
        <span class="h1 text-start mt-1">
          <img src="src/img/soy-sauce.png" alt="" width="50" height="50" class="align-text-top">
          Szószvilág
        </span>
      </div>
    </nav>
    <div class="container">
      <div class="row pt-5">
        <div class="col-sm-4">
          <div class="card">
            <img src="src/img/ketchup.jpg" alt="">
            <div class="card-body text-dark">
              <h5 class="card-title">Ketchup</h5>
              <p class="card-text">Utoljara feltoltve: anya</p>
              <p class="card-text">Mennyiseg: 15</p>
              <p class="card-text">Iz: savanyu</p>
              <p class="card-text">Csipos: 0</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <img src="src/img/ketchup.jpg" alt="">
            <div class="card-body text-dark">
              <h5 class="card-title">Ketchup</h5>
              <p class="card-text">Utoljara feltoltve: anya</p>
              <p class="card-text">db: 15</p>
              <p class="card-text">Stilus: savanyu</p>
              <p class="card-text">Csipos: 0</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <img src="src/img/ketchup.jpg" alt="">
            <div class="card-body text-dark">
              <h5 class="card-title">Ketchup</h5>
              <p class="card-text">Utoljara feltoltve: anya</p>
              <p class="card-text">db: 15</p>
              <p class="card-text">Stilus: savanyu</p>
              <p class="card-text">Csipos: 0</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row pt-5">
        <div class="col-sm-4">
          <div class="card">
            <img src="src/img/ketchup.jpg" alt="">
            <div class="card-body text-dark">
              <h5 class="card-title">Ketchup</h5>
              <p class="card-text">Utoljara feltoltve: anya</p>
              <p class="card-text">db: 15</p>
              <p class="card-text">Stilus: savanyu</p>
              <p class="card-text">Csipos: 0</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <img src="src/img/ketchup.jpg" alt="">
            <div class="card-body text-dark">
              <h5 class="card-title">Ketchup</h5>
              <p class="card-text">Utoljara feltoltve: anya</p>
              <p class="card-text">db: 15</p>
              <p class="card-text">Stilus: savanyu</p>
              <p class="card-text">Csipos: 0</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <img src="src/img/ketchup.jpg" alt="">
            <div class="card-body text-dark">
              <h5 class="card-title">Ketchup</h5>
              <p class="card-text">Utoljara feltoltve: anya</p>
              <p class="card-text">db: 15</p>
              <p class="card-text">Stilus: savanyu</p>
              <p class="card-text">Csipos: 0</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row pt-5">
        <div class="col-sm-4">
          <div class="card">
            <img src="src/img/ketchup.jpg" alt="">
            <div class="card-body text-dark">
              <h5 class="card-title">Ketchup</h5>
              <p class="card-text">Utoljara feltoltve: anya</p>
              <p class="card-text">db: 15</p>
              <p class="card-text">Stilus: savanyu</p>
              <p class="card-text">Csipos: 0</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <img src="src/img/ketchup.jpg" alt="">
            <div class="card-body text-dark">
              <h5 class="card-title">Ketchup</h5>
              <p class="card-text">Utoljara feltoltve: anya</p>
              <p class="card-text">db: 15</p>
              <p class="card-text">Stilus: savanyu</p>
              <p class="card-text">Csipos: 0</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <img src="src/img/ketchup.jpg" alt="">
            <div class="card-body text-dark">
              <h5 class="card-title">Ketchup</h5>
              <p class="card-text">Utoljara feltoltve: anya</p>
              <p class="card-text">db: 15</p>
              <p class="card-text">Stilus: savanyu</p>
              <p class="card-text">Csipos: 0</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row pt-5">
        <div class="col-sm-4">
          <div class="card">
            <img src="src/img/ketchup.jpg" alt="">
            <div class="card-body text-dark">
              <h5 class="card-title">Ketchup</h5>
              <p class="card-text">Utoljara feltoltve: anya</p>
              <p class="card-text">db: 15</p>
              <p class="card-text">Stilus: savanyu</p>
              <p class="card-text">Csipos: 0</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <img src="src/img/ketchup.jpg" alt="">
            <div class="card-body text-dark">
              <h5 class="card-title">Ketchup</h5>
              <p class="card-text">Utoljara feltoltve: anya</p>
              <p class="card-text">db: 15</p>
              <p class="card-text">Stilus: savanyu</p>
              <p class="card-text">Csipos: 0</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <img src="src/img/ketchup.jpg" alt="">
            <div class="card-body text-dark">
              <h5 class="card-title">Ketchup</h5>
              <p class="card-text">Utoljara feltoltve: anya</p>
              <p class="card-text">db: 15</p>
              <p class="card-text">Stilus: savanyu</p>
              <p class="card-text">Csipos: 0</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row pt-5">
        <div class="col-sm-4">
          <div class="card">
            <img src="src/img/ketchup.jpg" alt="">
            <div class="card-body text-dark">
              <h5 class="card-title">Ketchup</h5>
              <p class="card-text">Utoljara feltoltve: anya</p>
              <p class="card-text">db: 15</p>
              <p class="card-text">Stilus: savanyu</p>
              <p class="card-text">Csipos: 0</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <img src="src/img/ketchup.jpg" alt="">
            <div class="card-body text-dark">
              <h5 class="card-title">Ketchup</h5>
              <p class="card-text">Utoljara feltoltve: anya</p>
              <p class="card-text">db: 15</p>
              <p class="card-text">Stilus: savanyu</p>
              <p class="card-text">Csipos: 0</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <img src="src/img/ketchup.jpg" alt="">
            <div class="card-body text-dark">
              <h5 class="card-title">Ketchup</h5>
              <p class="card-text">Utoljara feltoltve: anya</p>
              <p class="card-text">db: 15</p>
              <p class="card-text">Stilus: savanyu</p>
              <p class="card-text">Csipos: 0</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row pt-5">
        <div class="col-sm-4">
          <div class="card">
            <img src="src/img/ketchup.jpg" alt="">
            <div class="card-body text-dark">
              <h5 class="card-title">Ketchup</h5>
              <p class="card-text">Utoljara feltoltve: anya</p>
              <p class="card-text">db: 15</p>
              <p class="card-text">Stilus: savanyu</p>
              <p class="card-text">Csipos: 0</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <img src="src/img/ketchup.jpg" alt="">
            <div class="card-body text-dark">
              <h5 class="card-title">Ketchup</h5>
              <p class="card-text">Utoljara feltoltve: anya</p>
              <p class="card-text">db: 15</p>
              <p class="card-text">Stilus: savanyu</p>
              <p class="card-text">Csipos: 0</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <img src="src/img/ketchup.jpg" alt="">
            <div class="card-body text-dark">
              <h5 class="card-title">Ketchup</h5>
              <p class="card-text">Utoljara feltoltve: anya</p>
              <p class="card-text">db: 15</p>
              <p class="card-text">Stilus: savanyu</p>
              <p class="card-text">Csipos: 0</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
