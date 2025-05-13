<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belah Ketupat</title>
</head>
<body>
    <?php
    $d1 = $_POST['d1'];
    $d2 = $_POST['d2'];
    $sisi = $_POST['sisi'];
    $luas = ($d1 * $d2) / 2;
    $keliling = 4 * $sisi;
    ?>
<a href="index.php">Home</a>
    <h1>Belah Ketupat</h1>
    <h4>Luas = (d1 x d2) ÷ 2 = <?php echo $luas; ?></h4>
    <h4>Keliling = 4 x sisi = <?php echo $keliling; ?></h4>
    <img style="width: 200px;" src="belahketupat.png" alt="belah ketupat">

</body>
</html>