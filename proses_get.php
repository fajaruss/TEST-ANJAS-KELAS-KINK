<?php
$nnama = htmlspecialchars($_GET['xnama']);
$nnim = htmlspecialchars($_GET['xnim']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <p>Nama: <?php echo $nnama; ?></p>
    <p>NIM: <?php echo $nnim; ?></p>
</body>
</html>