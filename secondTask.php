<?php
$months = array(1 => 'Sausis', 2 => 'Vasaris', 3 => 'Kovas', 4 => 'Balandis', 5 => 'Gegužė', 6 => 'Birželis', 7 => 'Liepa', 8 => 'Rugpjutis', 9 => 'Rugsėjis', 10 => 'Spalis', 11 => 'Lapkritis', 12 => 'Gruodis');
$days = array(1 => 31, 2 => 28, 3 => 31, 4 => 30, 5 => 31, 6 => 30, 7 => 31, 8 => 31, 9 => 30, 10 => 31, 11 => 30, 12 => 31);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Second Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<?php include 'header.php'; ?>
<div class="text-left m-3">
    <h1 class=" mb-3"> Months count</h1>
    <div class="mb-3 ">
        <?php
        $monthsWith31Days = array();
        $monthsWith30Days = array();
        $monthsWith28Days = array();
        foreach ($days as $monthNumber => $daysCount) {
            if ($daysCount == 31) {
                $monthsWith31Days[] = $months[$monthNumber];
            } elseif ($daysCount == 30) {
                $monthsWith30Days[] = $months[$monthNumber];
            } elseif ($daysCount == 28) {
                $monthsWith28Days[] = $months[$monthNumber];
            }
        }


        $monthsString = implode(', ', $monthsWith31Days);
        echo '<p>Metuose yra ' . count($monthsWith31Days) . ' mėnesiai turintys 31 dieną (' . $monthsString . ') </p>';
        $monthsString = implode(', ', $monthsWith30Days);
        echo '<p>Metuose yra ' . count($monthsWith30Days) . ' mėnesiai turintys 30 dienų (' . $monthsString . ') </p>';
        $monthsString = implode(', ', $monthsWith28Days);
        echo '<p>Metuose yra ' . count($monthsWith28Days) . ' mėnesiai turintys 28 dienas (' . $monthsString . ') </p>';
        echo '<p>Metuose yra ' . array_sum($days) . ' dienos </p>';
        echo '<p> </p>';
        foreach ($months as $key => $value) {
            if ($key <= 12) {
                echo $value . " yra " . $key . "  mėnuo ir turi " . $days[$key] . " d.<br>";

            }
        }
        ?>

    </div>

</div>
</body>
</html>