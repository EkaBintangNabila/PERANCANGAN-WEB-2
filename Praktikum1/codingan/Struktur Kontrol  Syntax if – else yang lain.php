<!DOCTYPE html>
<html>
<head>
    <title>Contoh Struktur If-ElseIf-Endif di PHP</title>
</head>
<body>
    <?php
    $a = 5;
    $b = 7;

    echo "\$a = $a <br>";
    echo "\$b = $b <br>";

    if ($a == $b):
        echo '$a sama dengan $b';
    elseif ($a > $b):
        echo '$a lebih besar daripada $b';
    else:
        echo '$a lebih kecil daripada $b';
    endif;
    ?>
</body>
</html>
