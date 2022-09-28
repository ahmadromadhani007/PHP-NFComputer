Dokumen Root PHP saya ada di <?= $_SERVER['DOCUMENT_ROOT'] ?>
</br>File latihan2.php berada di <?= $_SERVER['SCRIPT_FILENAME'] ?>
<hr />
<?php
//variable contstanta
define('LEMBAGA', 'NurulFikri Computer');
define('PHI', 3.14);
$jari2 = 15;
$luas = PHI * $jari2;
?>

Saya sedang belajar pemrograman PHP di <?= LEMBAGA ?>
<br />Luas Lingkaran dengan jari-jari <?= $jari2 ?> cm = <?= $luas ?>