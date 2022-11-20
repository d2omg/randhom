<?php

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>АХАХХАХАХАХАХХАХА</title>
</head>
<body class="bg-dark text-light">
    <div class="container-fluid">
        <center>
                <h1>Добро пожаловать!</h1>
                <h2>Сегодня: <?= date('l jS \of F Y h:i:s A'); ?></h2>
                <h3>Выберите число:
                    <br />
                    <br />
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <a role="button" href="re.php?mode=2" class="btn btn-success btn-lg">2</a>
                        <a role="button" href="re.php?mode=4" class="btn btn-primary btn-lg">4</a>
                        <a role="button" href="re.php?mode=5" class="btn btn-warning btn-lg">5</a>
                        <a role="button" href="re.php?mode=8" class="btn btn-light btn-lg">8</a>
                    </div>
                </h3>
        </center>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
