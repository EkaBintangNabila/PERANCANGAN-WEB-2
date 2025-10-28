<!DOCTYPE html>
<html>
<head>
    <title>Contoh Operator Penugasan PHP</title>
</head>
<body>
    <?php
    $a = 3;
    $b = 7;

    $a += 5;             // sama dengan $a = $a + 5;
    $b = ($c = 11) + 3;  // $c diisi 11, lalu $b diisi hasil 11 + 3

    echo "Nilai variabel a adalah = $a<br>";
    echo "Nilai variabel b adalah = $b<br>";
    echo "Nilai variabel c adalah = $c<br>";
    ?>
</body>
</html>
