<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layang-Layang</title>
</head>
<body>
    <?php
    $d1 = $_POST['d1'];
    $d2 = $_POST['d2'];
    $sisi_a = $_POST['sisi_a'];
    $sisi_b = $_POST['sisi_b'];
    $luas = ($d1 * $d2) / 2;
    $keliling = 2 * ($sisi_a + $sisi_b);
    ?>
<a href="index.php">Home</a>
   <h1>Layang-Layang</h1>
   <h4>Luas = (d1 x d2) ÷ 2 = <?php echo $luas; ?></h4>
   <h4>Keliling = 2 x (sisi a + sisi b) = <?php echo $keliling; ?></h4>
   <img style="width: 200px;" src="layang-layang.jpg" alt="layang-layang">

</body>
</html>
