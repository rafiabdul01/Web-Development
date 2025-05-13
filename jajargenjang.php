<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jajar Genjang</title>
</head>
<body>
    <?php
    $alas = 20;
    $tinggi = 11;
    $a = 13;
    $b = 7;
    $luas = $alas * $tinggi;
    $keliling = 2 * ($a + $b);
    ?>
<a href="index.php">Home</a>
    <h1>Jajar Genjang</h1>
    <h4>Luas = alas x tinggi = <?php echo $luas; ?></h4>
    <h4>Keliling = 2 x (a+b) = <?php echo $keliling; ?></h4>
    <img style="width: 200px;" src="jajargenjang.png" width alt="jajar genjang">
    

</body>
</html>