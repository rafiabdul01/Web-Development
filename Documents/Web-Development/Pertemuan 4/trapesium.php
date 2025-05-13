<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trapesium</title>
</head>
<body>
    <?php
    $a = 8;
    $b = 10;
    $c = 7;
    $d = 7;
    $t= 10;
    $luas = 1/2 * ($a + $b) * $t;
    $keliling = $a + $b + $c + $d;
    ?>
<a href="index.php">Home</a>
    <h1>Trapesium</h1>
    <h4>Luas = 1/2 x (a + b) x t = <?php echo $luas; ?></h4>
    <h4>Keliling = a + b + c + d = <?php echo $keliling; ?></h4>
    <img style="width: 200px;" src="trapesium.png" width alt="trapesium">

</body>
</html>