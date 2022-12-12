<?php

if (isset($_POST['number'])) {
    $angka = $_POST['number'];
} else {
    $angka = 0;
    echo "<p>Harap inputkan angka !!<p>";
}

$array =
    [
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1
    ];
$result = '';
while ($angka > 0) {
    foreach ($array as $romawi => $int) {
        if ($angka >= $int) {
            $angka -= $int;
            $result .= $romawi;
            break;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Romawi-Count</title>
    <style>
    p {
        font-style: italic;
        font-weight: bold;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="output">
            <h3 id="hasil">Hasil : <?php echo $result ?></h3>
        </div>
        <div class="input">
            <label for="">
                <h3>Input Number</h3>
            </label>
            <form method="POST">
                <input type="number" id="number" placeholder="input" name="number" />
                <button id="done">Hasil</button>
            </form>
        </div>
    </div>
</body>

</html>