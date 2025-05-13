<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trapesium</title>
</head>
<body>
    <?php
    $sisi_1 = $_POST['sisi_1'];
    $sisi_2 = $_POST['sisi_2'];
    $sisi_3 = $_POST['sisi_3'];
    $sisi_4= $_POST['sisi_4'];
    $tinggi= $_POST['tinggi'];
    $luas = 1/2 * ($sisi_1 + $sisi_2) * $tinggi;
    $keliling = $sisi_1+ $sisi_2 + $sisi_3 + $sisi_4;
    ?>
<a href="index.php">Home</a>
    <h1>Trapesium</h1>
    <h4>Luas = 1/2 x (sisi 1 + sisi 2) x tinggi = <?php echo $luas; ?></h4>
    <h4>Keliling = sisi 1 + sisi 2+ sisi 3 + sisi 4 = <?php echo $keliling; ?></h4>
    <img style="width: 200px;" src="trapesium.png" width alt="trapesium">

</body>
</html>