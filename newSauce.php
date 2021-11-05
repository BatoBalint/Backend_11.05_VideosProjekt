<!DOCTYPE html>
<html lang="hu" dir="ltr">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
              <label class="form-label">Szósz neve</label>
              <input type="text" class="form-control">
            </div>
            <div class="mb-3">
              <label class="form-label">Mennyiség</label>
              <input type="number" class="form-control">
            </div>
            <div class="mb-3">
              <label class="form-label">Mikor volt feltöltve</label>
              <input type="date" class="form-control">
            </div>
            <div class="mb-3">
              <label class="form-label">Ízvilág</label>
              <input type="text" class="form-control">
            </div>
            <div class="mb-5">
              <label class="form-label">Csipősségi szint</label>
              <input type="number" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Hozzáadás</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
