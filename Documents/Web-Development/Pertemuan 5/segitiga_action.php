<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segitiga</title>
</head>
<body>
    <?php
    $alas= $_POST['alas'];
    $tinggi =$_POST['tinggi'];
    $sisi_a = $_POST['sisi_a'];
    $sisi_b = $_POST['sisi_b'];
    $sisi_c= $_POST['sisi_c'];
    $luas = 1/2 * $alas * $tinggi;
    $keliling = $sisi_a + $sisi_b + $sisi_c;
    ?>
<a href="index.php">Home</a>
    <h1>Segitiga</h1>
    <h4>Luas = 1/2 x alas x tinggi = <?php echo $luas; ?></h4>
    <h4>Keliling = sisi a + sisi b + sisi c = <?php echo $keliling; ?></h4>
    <img style = "width: 200px;" src="segitiga.png" width alt="segitiga">

</body>
</html>