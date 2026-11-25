<?php
$nnama = htmlspecialchars($_POST['xnama']);
$nnim = htmlspecialchars($_POST['xnim']);
$nalamat = htmlspecialchars($_POST['xalamat']);
$nprodi = htmlspecialchars($_POST['xprodi']);
$ngender = htmlspecialchars($_POST['gender']);
$pw = htmlspecialchars($_POST['xpw']);
$hobi = isset($_POST['hobi']) ? array_map('htmlspecialchars', $_POST['hobi']) : [];
$nhobi = empty($hobi) ? '-' : implode(', ', $hobi);
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
    <p>Alamat: <?php echo $nalamat; ?></p>
    <p>Program Studi: <?php echo $nprodi; ?></p>
    <p>Jenis Kelamin: <?php echo $ngender; ?></p>
    <p>Hobi: <?php echo $nhobi; ?></p>
    <p>Password: <?php echo str_repeat('😂', mb_strlen($pw)); ?></p>
</body>
</html>