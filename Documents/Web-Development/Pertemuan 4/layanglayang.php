<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layang Layang</title>
</head>
<body>
    <?php
    $d1 = 7;
    $d2= 11;
    $a = 8;
    $b = 9;
    $luas = 1/2 * $d1 * $d2;
    $keliling = 2 * ($a + $b);
    ?>
<a href="index.php">Home</a>
    <h1>Layang Layang</h1>

    <h4>Luas = 1/2 x d1 x d2  = <?php echo $luas; ?></h4>
    <h4>Keliling = 2 x (a + b) = <?php echo $keliling; ?></h4>
    <img src="layang-layang.jpg" width alt="layang layang">

</body>
</html>