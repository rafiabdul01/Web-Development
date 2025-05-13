<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belah Ketupat</title>
</head>
<body>
    <?php
    $s= 14;
    $d1 = 19;
    $d2 = 24;
    $luas = 1/2 * $d1 * $d2;
    $keliling = 4 * $s;
    ?>
<a href="index.php">Home</a>
    <h1>Belah ketupat</h1>
    <h4>Luas = 1/2 x d1 x d2 = <?php echo $luas; ?></h4>
    <h4>Keliling = 4 x s (panjang sisi) = <?php echo $keliling; ?></h4>
    <img style="width: 200px;" src="belahketupat.png" width alt="belah ketupat"> 
    
</body>
</html>