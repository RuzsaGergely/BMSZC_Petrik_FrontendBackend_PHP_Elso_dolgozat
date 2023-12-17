<?php
require  "dbconnector.php";

$databaseHandler = new DatabaseHandler();
$databaseHandler->Init();

?>
<!doctype html>
<html lang="hu">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP - Első dolgozat / Főoldal</title>
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
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Megnevezés</th>
                                    <th scope="col">Raktárkészlet</th>
                                    <th scope="col">Forgalmazás kezdete</th>
                                    <th scope="col">EU kompatibilis</th>
                                    <th scope="col">Típus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $html_output = "";
                                        $records = $databaseHandler->GetToys();
                                        foreach ($records as $record) {
                                            $eukomp = $record["eukomp"] > 0 ? "Igen" : "Nem";
                                            $html_output .= <<<HTML
                                                <tr>
                                                    <th scope="row">{$record["id"]}</th>
                                                    <td>{$record["megnevezes"]}</td>
                                                    <td>{$record["raktarkeszlet"]} db</td>
                                                    <td>{$record["forgkezd"]}</td>
                                                    <td>{$eukomp}</td>
                                                    <td>{$record["tipus"]}</td>
                                                </tr>
                                            HTML;
                                        }
                                        echo $html_output;
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>