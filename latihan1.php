<?php
//variable define by user

$namaSiswa = "budi santoso";
$umur = 25;
$berat_badan = 25.5;
//cetak
echo 'Siswa bernama ' . $namaSiswa . '. umurnya ' . $umur .
    'tahun dan berat badanya ' . $berat_badan . 'kg';

echo "<hr/>Siswa bernama $namaSiswa, umurnya $umur
    tahun dan berat badanya $berat_badan kg";

echo '<hr/>Siswa bernama $namaSiswa, umurnya $umur
    tahun dan berat badanya $berat_badan kg';

?>

<hr />Siswa bernama <?= $namaSiswa ?>, umurnya <? $umur ?>
tahun dan berat badanya <? $berat_badan ?> kg