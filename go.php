<?php

$ck = $_GET["mode"];

$class = array(
    Словрь
);

$color = array(
    'primary',
    'secondary',
    'success',
    'danger',
    'warning',
    'info',
    'light',
    'dark',
);

function grn($maximum, $ck){
    return array_rand(range(0, $maximum), $ck);
}

function printchel($class, $color, $e, $ck){
    //$i = mt_rand(0, count($class)-1);
    $z = grn(count($class)-1, $ck)[$e];
    $color = $color[grn(count($color)-1, $ck)[$e]];
    #echo $z;
    $text = <<<TXT
    <div class="alert alert-$color" role="alert">
        <b>$class[$z]</b>
    </div>
TXT;
    return $text;
}

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
            <h1>
                Сегодня "не повезло" Этим ЛЮДЯМ:<br>
                <?php
                for ($i = 0; $i < $ck; $i++) {
                    echo printchel($class, $color, $i, $ck);
                }
                ?>
            </h1>
            <h3>Перезагрузите страницу чтобы обновить!</h3>
            <a role="button" href="http://d2omg.ru/r/index.php" class="btn btn-primary btn-lg btn-block">Новый конфиг!</a>
        </center>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
