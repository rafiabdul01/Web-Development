<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lingkaran</title>
</head>
<body>
    <?php
    $r = $_POST['jari']; 
    $luas = pi() * $r * $r; 
    $keliling = 2 * pi() * $r; 
    ?>
<a href="index.php">Home</a>
    <h1>Lingkaran</h1>
    <h4>Luas = π x r² = <?php echo $luas; ?></h4>
    <h4>Keliling = 2 x π x r = <?php echo $keliling; ?></h4>
    <img style="width: 200px;" src="lingkaran.png" alt="lingkaran">

</body>
</html>