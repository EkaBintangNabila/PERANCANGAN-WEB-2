<!DOCTYPE html>
<html>
<head>
    <title>Contoh Operator Logika PHP</title>
</head>
<body>
    <?php
    $b = 4 != 4;      // false
    $c = 3 + 7 == 10; // true

    $a = ($b and $c);
    echo "\$a = $a <br>";

    $a = ($b or $c);
    echo "\$a = $a <br>";

    $a = ($b xor $c);
    echo "\$a = $a <br>";

    $a = (!$b or $c);
    echo "\$a = $a <br>";

    $a = $b && $c;
    echo "\$a = $a <br>";

    $a = $b || $c;
    echo "\$a = $a <br>";
    ?>
</body>
</html>
