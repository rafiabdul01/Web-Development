<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segitiga</title>
</head>
<body>
    <?php
    $alas= 12;
    $tinggi = 9;
    $a = 5;
    $b = 5;
    $c = 6;
    $luas = 1/2 * $alas * $tinggi;
    $keliling = $a + $b + $c;
    ?>
<a href="index.php">Home</a>
    <h1>Segitiga</h1>
    <h4>Luas = 1/2 x alas x tinggi = <?php echo $luas; ?></h4>
    <h4>Keliling = a + b + c = <?php echo $keliling; ?></h4>
    <img style = "width: 200px;" src="segitiga.png" width alt="segitiga">

</body>
</html>