<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!empty($_POST["bemenetMegnevezes"]) && !empty($_POST["bemenetRaktarkeszlet"]) && !empty($_POST["bemenetForgkezd"]) && !empty($_POST["bemenetTipus"]) && isset($_POST["bemenetEukomp"]) && strlen($_POST["bemenetTipus"]) == 1) {
        require  "dbconnector.php";

        $databaseHandler = new DatabaseHandler();
        $databaseHandler->Init();

        $databaseHandler->InsertToy($_POST["bemenetMegnevezes"], $_POST["bemenetRaktarkeszlet"], $_POST["bemenetForgkezd"], $_POST["bemenetEukomp"], $_POST["bemenetTipus"]);

        header("Location: index.php");
    } else {
        echo "<script>alert('Kérlek tölts ki minden mezőt megfelelően!')</script>";
    }
}

?>

<!doctype html>
<html lang="hu">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP - Első dolgozat / Felvétel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <?php
        require_once("header.php");
    ?>
    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form action="felvetel.php" method="post">
                            <div class="mb-3">
                                <label for="bemenetMegnevezes" class="form-label">Megnevezés</label>
                                <input type="text" class="form-control" id="bemenetMegnevezes" name="bemenetMegnevezes" required>
                            </div>
                            <div class="mb-3">
                                <label for="bemenetRaktarkeszlet" class="form-label">Raktárkészlet</label>
                                <input type="number" min="0" class="form-control" id="bemenetRaktarkeszlet" name="bemenetRaktarkeszlet" value="1" required>
                            </div>
                            <div class="mb-3">
                                <label for="bemenetForgkezd" class="form-label">Forgalmazás kezdete</label>
                                <input type="date" class="form-control" id="bemenetForgkezd" name="bemenetForgkezd" required>
                            </div>
                            <div class="mb-3">
                                <label for="bemenetTipus" class="form-label">Típus</label>
                                <input type="text" maxlength="1" class="form-control" id="bemenetTipus" name="bemenetTipus" required>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="bemenetEukomp" name="bemenetEukomp">
                                <label class="form-check-label" for="bemenetEukomp">EU kompatibilis?</label>
                            </div>
                            <button type="submit" class="btn btn-success">Mentés</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>