<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lingkaran</title>
</head>
<body>
    <?php
    $r = 7;
    $phi = 3.14;
    $luas = $phi * $r * $r;
    $keliling = 2 * $phi * $r;
    ?>
<a href="index.php">Home</a>
    <h1>Lingkaran</h1>
    <h4>Luas =phi x r2 = <?php echo $luas; ?></h4>
    <h4>Keliling = 2 x phi x r = <?php echo $keliling; ?></h4>
    <img style="width: 200px;" src="lingkaran.png" width alt="lingkaran">

</body>
</html>