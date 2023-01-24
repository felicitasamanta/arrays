<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<?php include 'header.php'; ?>
<div class=" view d-flex flex-wrap justify-content-between align-items-center .view">
    <form class=" col-md-5 mx-auto border border-primary p-3">
        <h1 class="text-center mb-3"> Temperatūros</h1>
        <div>
            <?php

            if (isset($_POST["temperatures"]) && !empty($_POST["temperatures"])) {
                $temperatures = preg_split("/[\s,]+/", $_POST["temperatures"]);
                $valid = true;
                foreach ($temperatures as $temp) {
                    if (!ctype_digit($temp)) {
                        $valid = false;
                        break;
                    }
                }
                $unique_temperatures = array_unique($temperatures);
                sort($unique_temperatures);
                if ($valid) {
                    echo '<div>Vidutinė temperatūra: ' . array_sum($temperatures) / count($temperatures) . "°C" . '</div>';
                    echo '<div>Viso nuoskaitų: ' . count($temperatures) . '</div>';
                    echo '<div>Dvi didžiausios temperatūros: ' . $unique_temperatures[count($unique_temperatures) - 1] . "°C" . ', ' . $unique_temperatures[count($unique_temperatures) - 2] . "°C" . '</div>';
                    echo '<div>Dvi mažiausios temperatūros: ' . $unique_temperatures[0] . "°C" . ', ' . $unique_temperatures[1] . "°C" . '</div>';
                } else {
                    echo '<div>Please enter only digits.</div>';
                }
            } else {
                echo '<div>Please enter temperatures</div>';
            }
            ?>
        </div>
        <a href="firstTask.php" class="btn mx-auto btn-primary">Skaičiuoti naujas temperatūras</a>
    </form>
</div>
</body>
</html>